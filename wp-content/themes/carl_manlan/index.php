<?php do_action('carl_header');

$page_id = 131; // Replace with the desired page ID
$page = get_post($page_id);

$the_content = apply_filters('the_content', $page->post_content);
$the_content = strip_tags($the_content);
$url = wp_get_attachment_url( get_post_thumbnail_id(131), 'thumbnail' ); ?>

<!-- Hero -->
<section class="hero">
  <div class="bannerSm blueOverlay">
    <img
      src="<?php echo $url;?>"
      alt="" />
    <div class="txtWrapper mainGrid">
      <div class="content">
        <small> Home / Blogs </small>
        <h1><?php echo $the_content; ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->

<section class="mainGrid blogs blogsNormal">
  <div class="content">
    <div class="headerWrapper"></div>
    <div class="contentWrapper">
      <?php
      $args = array(
        'posts_per_page'   => -1,
        'post_type'        => 'post',
      );
      $the_query = new WP_Query($args);
      if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
      $the_query->the_post(); ?>
      <div class="grid-item">
        <?php if (has_post_thumbnail()) { ?>
          <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" />
        <?php } ?>
        <div class="flex timeWrapper">
          <object data="assets/date.svg" width="12" height="13"></object>
          <time><?php echo get_the_date();?></time>
        </div>
        <h3><?php the_title();?></h3>
        <p><?php the_excerpt();?></p>
        <a href="<?php the_permalink();?>">
          <button class="btn-primary">
            Learn More <span class="arrow"></span>
          </button>
        </a>
      </div>
      <?php } } wp_reset_query(); ?>
    </div>
  </div>
</section>

<?php do_action('carl_footer'); ?>