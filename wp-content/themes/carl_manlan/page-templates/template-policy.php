<?php

/**
 * Template Name: Policy Layout
 */

do_action('carl_header');

$postID = get_the_ID();
$url    = wp_get_attachment_url(get_post_thumbnail_id($postID), 'thumbnail'); ?>

<section class="bannerSection font-medium w-full relative flex min-h-svh">
  <div
    class="hexBg pattern1 linear-grad-mask absolute inset-0 z-0 "
    data-gradX="0.8"
    data-gradY="0"></div>
  <div class="after:absolute after:inset-0 after:bg-linear-to-bl after:from-dark/10 after:to-dark/80"></div>
  <div class=" container txtContent z-1 text-light pb-10">
    <h1 class="text-xl/relaxed md:text-3xl/relaxed text-center py-20 text-primary"><?php the_title(); ?></h1>
    <div class="content text-light/80 policyContent text-sm font-normal font-poppins">
      <?php the_content(); ?>
    </div>
  </div>
</section>

<?php do_action('carl_footer'); ?>