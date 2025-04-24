<?php
/**
 * Template Name: Approach Layout
 */

do_action('carl_header');

$postID = get_the_ID();
$url    = wp_get_attachment_url( get_post_thumbnail_id($postID), 'thumbnail' ); ?>

<!-- Hero -->
<section class="hero">
  <div class="bannerSm blueOverlay">
    <img
      src="<?php echo $url;?>"
      alt="" />
    <div class="txtWrapper mainGrid">
      <div class="content">
        <small> Home / Our Approach </small>
        <h1>Our Approach</h1>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->

<!-- About -->
<section class="mainGrid txtImg">
  <div class="content">
    <div class="left">
      <h1><?php echo get_field('approach_title');?></h1>
      <?php the_content();?>
    </div>
    <div class="imgWrapper">
      <img
        src="<?php echo get_field('approach_image');?>"
        alt="" />
    </div>
  </div>
</section>
<!-- About End -->

<?php do_action('carl_footer'); ?>