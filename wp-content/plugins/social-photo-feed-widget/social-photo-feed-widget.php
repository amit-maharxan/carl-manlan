<?php
/*
Plugin Name: Widgets for Social Photo Feed
Plugin Title: Widgets for Social Photo Feed Plugin
Plugin URI: https://wordpress.org/plugins/social-photo-feed-widget/
Description: Instagram Feed Widgets. Display your Instagram feed on your website to increase engagement, sales and SEO.
Tags: instagram, feed, widget, photos, gallery
Version: 1.6.7
Requires at least: 6.2
Requires PHP: 7.0
Author: Trustindex.io <support@trustindex.io>
Author URI: https://www.trustindex.io/
Contributors: trustindex
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: social-photo-feed-widget
Domain Path: /languages/
Donate link: https://www.trustindex.io/prices/
*/
/*
You should have received a copy of the GNU General Public License
along with Review widget addon for Divi. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/
/*
Copyright 2019 Trustindex Kft (email: support@trustindex.io)
*/
defined('ABSPATH') or die('No script kiddies please!');
require_once plugin_dir_path(__FILE__) . 'include' . DIRECTORY_SEPARATOR . 'cache-plugin-filters.php';
require_once plugin_dir_path( __FILE__ ) . 'trustindex-feed-plugin.class.php';
$trustindex_feed_instagram = new TRUSTINDEX_Feed_Instagram("instagram", __FILE__, "1.6.7", "Widgets for Social Photo Feed", "Instagram");
$pluginManagerInstance = $trustindex_feed_instagram;
register_activation_hook(__FILE__, [ $pluginManagerInstance, 'activate' ]);
register_deactivation_hook(__FILE__, [ $pluginManagerInstance, 'deactivate' ]);
add_action('plugins_loaded', [ $pluginManagerInstance, 'load' ]);
add_action('admin_menu', [ $pluginManagerInstance, 'addSettingMenu' ], 10);
add_filter('plugin_action_links', [ $pluginManagerInstance, 'addPluginActionLinks' ], 10, 2);
add_filter('plugin_row_meta', [ $pluginManagerInstance, 'addPluginMetaLinks' ], 10, 2);
add_action('init', [ $pluginManagerInstance, 'outputBuffer' ]);
add_action('admin_enqueue_scripts', [ $pluginManagerInstance, 'addScripts' ]);
if (is_file($pluginManagerInstance->getCssFile())) {
add_action('init', function() use ($pluginManagerInstance) {
$path = wp_upload_dir()['baseurl'] .'/'. $pluginManagerInstance->getCssFile(true);
if (is_ssl()) {
$path = str_replace('http://', 'https://', $path);
}
wp_register_style('trustindex-feed-widget-css-'. $pluginManagerInstance->getShortName(), $path, [], filemtime($pluginManagerInstance->getCssFile()));
});
}
if (!function_exists('trustindex_esc_css')) {
 function trustindex_esc_css($css) {
 $css = wp_strip_all_tags($css);
 $css = esc_html($css);
 $css = str_replace(['&lt;','&gt;','&quot;', '&#039;', '&amp;'], ['<', '>', '"', "'", '&'], $css);
 return $css;
 }
}
add_action('init', [ $pluginManagerInstance, 'shortcode' ]);
add_filter('script_loader_tag', function($tag, $handle, $src) {
if ($handle === 'trustindex-feed-loader-js' && strpos($tag, 'defer async') === false) {
$tag = str_replace(' src', ' defer async src', $tag);
}
if (strpos($handle, 'trustindex-feed-data') !== false) {
$content = [];
$content_pattern = '/script_content_start(.*)script_content_end/';
if (preg_match($content_pattern, $tag, $content)) {
$replace = [
 '/\s+type\s*=\s*["\'][^"\']+["\']/' => '',
'/\s+src\s*=\s*/' => ' type="application/ld+json" data-src=',
$content_pattern => '',
'/><\//' => '>'. base64_decode($content[1]) .'</',
];
$tag = preg_replace(array_keys($replace), array_values($replace), $tag);
}
}
return $tag;
}, 10, 3);
add_action('admin_notices', function() use ($pluginManagerInstance) {
if (!current_user_can($pluginManagerInstance::$permissionNeeded)) {
return;
}
foreach ($pluginManagerInstance->getNotificationOptions() as $type => $options) {
if (!$pluginManagerInstance->isNotificationActive($type)) {
continue;
}
echo '<div class="notice notice-'. esc_attr($options['type']) .' '. ($options['is-closeable'] ? 'is-dismissible' : '') .' trustindex-notification-row '. esc_attr($options['extra-class']).'" data-close-url="'. esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() .'/admin.php&notification='. $type .'&action=close')) .'">';
if ($type === 'rate-us') {
echo '<div class="trustindex-star-row">&starf;&starf;&starf;&starf;&starf;</div>';
}
echo '<p>'. wp_kses_post($options['text']) .'<p>';
if ($type === 'rate-us') {
echo '
<a href="'. esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() .'/admin.php&notification='. $type .'&action=open')) .'" class="ti-close-notification" target="_blank">
<button class="button ti-button-primary button-primary">'. esc_html(__('Write a review', 'social-photo-feed-widget')) .'</button>
</a>
<a href="'. esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() .'/admin.php&notification='. $type .'&action=later')) .'" class="ti-remind-later">
'. esc_html(__('Maybe later', 'social-photo-feed-widget')) .'
</a>
<a href="'. esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() .'/admin.php&notification='. $type .'&action=hide')) .'" class="ti-hide-notification" style="float: right; margin-top: 14px">
'. esc_html(__('Do not remind me again', 'social-photo-feed-widget')) .'
</a>
';
} else {
echo '
<a href="'. esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() .'/admin.php&notification='. $type .'&action=open')) .'">
<button class="button button-primary">'. esc_html($options['button-text']) .'</button>
</a>';
if ($options['remind-later-button']) {
echo '
<a href="'. esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() .'/admin.php&notification='. $type .'&action=later')) .'" class="ti-remind-later" style="margin-left: 5px">
'. esc_html(__('Remind me later', 'social-photo-feed-widget')) .'
</a>';
}
}
echo '
</p>
</div>';
}
});
add_action('elementor/widgets/widgets_registered', function ($widgetsManager) {
require_once(__DIR__ . '/include/trustindex-elementor-widgets.php');
$widgetsManager->register(new \Elementor\TrustrindexFeedWidget_Instagram());
});
add_action('elementor/elements/categories_registered', function ($elementsManager) {
$elementsManager->add_category(
'trustindex',
[
'title' => __('Trustindex', 'social-photo-feed-widget'),
'icon' => 'fa fa-plug',
]
);
});
add_action('wp_enqueue_scripts', function() use ($pluginManagerInstance) {
if (!is_user_logged_in() || !current_user_can($pluginManagerInstance::$permissionNeeded)) {
return;
}
foreach ($pluginManagerInstance->getNotificationOptions() as $type => $options) {
if (!$pluginManagerInstance->isNotificationActive($type) || !in_array($options['type'], ['error'])) {
continue;
}
echo '<div class="trustindex-notice notice-'. esc_attr($options['type']) . '" style="left:-50%;opacity:0;" data-redirect-url="'. esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() .'/admin.php&notification='. $type .'&action=open')) .'">';
echo '<span class="trustindex-notice-dismiss" data-close-url="' . esc_url(admin_url('admin.php?page='. $pluginManagerInstance->getPluginSlug() . '/admin.php&notification=' . $type . '&action=later&remind-days=1')) . '"></span>';
echo wp_kses_post($options['short-message']);
echo '</div>';
}
wp_register_script('trustindex_frontend_notification', $pluginManagerInstance->getPluginFileUrl('assets/js/frontend-notifictions.js'), [], $pluginManagerInstance->getVersion(), ['in_footer' => false]);
wp_enqueue_script('trustindex_frontend_notification');
wp_enqueue_style('trustindex_frontend_notification', $pluginManagerInstance->getPluginFileUrl('assets/css/frontend-notifictions.css'), [], $pluginManagerInstance->getVersion());
});
unset($pluginManagerInstance);
?>
