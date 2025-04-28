<?php
/**
 * Template Name: Papers Layout
 */

do_action('carl_header');

$postID = get_the_ID();
$url    = wp_get_attachment_url( get_post_thumbnail_id($postID), 'thumbnail' ); ?>

<!-- Hero -->
<section class="hero">
  <div class="bannerSm blueOverlay">
    <img src="<?php echo $url;?>" alt="" />
    <div class="txtWrapper mainGrid">
      <div class="content">
        <small> Home / Papers </small>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->

<section class="mainGrid papers">
  <div class="content">
    <div class="paperGrid">
      <?php if( have_rows('our_papers') ):
      while( have_rows('our_papers') ) : the_row(); ?>
        <div class="grid-item">
          <a href="<?php the_sub_field('papers_file');?>" download>
            <div class="imgWrapper">
              <img src="<?php the_sub_field('papers_image');?>" />
            </div>
            <p class="title"><?php the_sub_field('papers_title');?></p>
          </a>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<?php do_action('carl_footer'); ?>