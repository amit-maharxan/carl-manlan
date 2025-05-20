<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package CARL
 */

if( !function_exists( 'carl_add_meta' ) ) :
   /**
	* Add meta tags.
	*/
	function carl_add_meta() { ?>
		<meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php }
endif;

if ( !function_exists( 'carl_add_links' ) ) :
	/*
	* Add Google fonts, Pingback url, etc.
	*/
	function carl_add_links() { ?>
        <link rel="preload" href="<?php echo DK_ASSEST_URI . '/fonts/Oswald-VariableFont_wght.ttf';?>" as="font" type="font/ttf" crossorigin />
        <link rel="preload" href="<?php echo DK_ASSEST_URI . '/fonts/OvertheRainbow-Regular.ttf';?>" as="font" type="font/ttf" crossorigin />
	<?php }
endif;

function my_custom_login() {
	echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'CARL MANLAN';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function scrape_youtube_mix_with_player($url) {
    $html = file_get_contents($url);
    if (!$html) return 'Could not load the page.';

    // Extract titles and video IDs
    preg_match_all('/"title":{"runs":\[{"text":"(.*?)"}\],"accessibility"/', $html, $titles);
    preg_match_all('/"videoId":"(.*?)"/', $html, $videoIds);

    $uniqueIds = array_unique($videoIds[1]);
    $uniqueTitles = array_unique($titles[1]);

    if (empty($uniqueIds) || empty($uniqueTitles)) {
        return 'No videos found.';
    }

    // Limit to first 10 videos for demo
    $output = '<div id="yt-player-wrapper">';
    $output .= '<div id="yt-player" style="aspect-ratio: 16/9; width: 100%; max-width: 800px; margin-bottom: 1em;"></div>';
    $output .= '<ul id="yt-playlist" class="yt-playlist">';

    foreach ($uniqueTitles as $i => $title) {
        if (!isset($uniqueIds[$i])) continue;
        $id = $uniqueIds[$i];
        $safe_title = esc_html($title);
        $output .= "<li data-videoid='$id' style='cursor:pointer;'>▶ $safe_title</li>";
    }

    $output .= '</ul></div>';

    // Add JavaScript for embedding player and autoplay loop
    $output .= <<<HTML
<script>
  let videoIds = [];
  document.querySelectorAll('#yt-playlist li').forEach((el, index) => {
    videoIds.push(el.getAttribute('data-videoid'));
    el.addEventListener('click', () => {
      player.loadVideoById(el.getAttribute('data-videoid'));
      currentVideoIndex = index;
    });
  });

  let currentVideoIndex = 0;
  let player;

  function onYouTubeIframeAPIReady() {
    player = new YT.Player('yt-player', {
      videoId: videoIds[currentVideoIndex],
      events: {
        'onReady': onPlayerReady,
        'onStateChange': onPlayerStateChange
      }
    });
  }

  function onPlayerReady(event) {
    event.target.playVideo();
  }

  function onPlayerStateChange(event) {
    if (event.data === YT.PlayerState.ENDED) {
      currentVideoIndex = (currentVideoIndex + 1) % videoIds.length;
      player.loadVideoById(videoIds[currentVideoIndex]);
    }
  }

  // Load YouTube iframe API
  const tag = document.createElement('script');
  tag.src = "https://www.youtube.com/iframe_api";
  document.head.appendChild(tag);
</script>
HTML;

    return $output;
}

function yt_scrape_loop_shortcode($atts) {
    $atts = shortcode_atts([
        'url' => 'https://www.youtube.com/watch?v=kw4tT7SCmaY&list=RDMM'
    ], $atts, 'yt_scrape_loop');

    return scrape_youtube_mix_with_player(esc_url_raw($atts['url']));
}

add_shortcode('yt_scrape_loop', 'yt_scrape_loop_shortcode');