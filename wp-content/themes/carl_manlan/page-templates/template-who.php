<?php
/**
 * Template Name: Who Are We Layout
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
        <small> Home / <?php the_title(); ?> </small>
        <h1><?php the_title(); ?></h1>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->

<!-- About -->
<section class="mainGrid txtImg">
  <div class="content">
    <div class="left">
      <?php the_content(); ?>
    </div>
    <div class="imgWrapper">
      <img src="<?php echo $url;?>" alt="" />
    </div>
  </div>
</section>
<!-- About End -->

<!-- Timeline -->
<section class="mainGrid">
  <div class="content-fullWidth">
    <div class="headers content">
      <h1><?php the_field('waw_title'); ?></h1>
      <p><?php the_field('waw_description'); ?></p>
    </div>

    <div class="timelineGrid content-fullWidth">
      <div class="timeline">
        <?php
        if( have_rows('timeline') ):
        while( have_rows('timeline') ) : the_row(); ?>
        <div class="event">
          <div class="icons">
            <div class="circleLg"></div>
            <div class="lineVertical"></div>
            <div class="lineHorizontal"></div>
          </div>
          <div class="eventContent">
            <h2 class="heading"><?php the_sub_field('date'); ?></h2>
            <span class="label"><?php the_sub_field('stage'); ?></span>
            <ul>
              <?php
              if( have_rows('activities') ):
              while( have_rows('activities') ) : the_row(); ?>
                <li><?php the_sub_field('activity'); ?></li>
              <?php endwhile; endif; ?>
            </ul>
          </div>
        </div>
        <?php endwhile; endif; ?>
      </div>
      <div class="watermark">
        <img src="<?php echo site_url('wp-content/uploads/2024/12/LogoWatermark.svg');?>" alt="" />
      </div>
    </div>
  </div>
</section>
<!-- Timeline END -->

<?php do_action('carl_footer'); ?>