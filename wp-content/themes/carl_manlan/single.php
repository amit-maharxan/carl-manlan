<?php do_action('carl_header');
$blogID = get_the_ID();
$post_type = get_post_type(); ?>

<section class="relative">
  <div
    class="hexBg pattern1 bgEffect linear-grad-mask absolute inset-0 z-0 after:z-0 after:blocsk after:inset-0 after:absolute after:bg-linear-to-b after:from-transparent after:via-dark/40 after:via-80% after:to-dark"
    data-gradX="0.8"
    data-gradSize="farthest-corner"
    data-gradY="0"></div>
  <div class="titleDiv relative pb-10 pt-[max(4rem,_30vh)]">
    <h1 class="text-4xl font-bold w-full text-light text-center"><?php the_title(); ?></h1>
  </div>
</section>

<section class="mainGrid blog-section relative">
  <div class="content container text-light z-1">
    <div class="left__part">

      <div id="blog-image" class="">
        <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'thumbnail'); ?>
        <img src="<?php echo $url; ?>" alt="image">
      </div>
      <b class="blog-details pb-10">

        <p class="added-on"><?php if (get_field("organization_post")) { ?>Originally Published on the <?php echo the_field("organization_post"); ?>,<?php } ?> <?php echo get_the_date(); ?></p>
        <p class="desc"><?php the_content(); ?></p>
        <button class="btn-primary"> View All</button>
      </b>
    </div>
    <!-- <div class="right__part">
      <h3>Recent Articles</h3>
      <div class="row">
        <?php
        $wp_query = new WP_Query(array(
          'post_type'         => $post_type,
          'posts_per_page'    => 4,
          'post__not_in'      => array($blogID)
        ));

        while ($wp_query->have_posts()) : $wp_query->the_post();
          $link = get_the_permalink();
        ?>
          <div class="recent_article">
            <div class="media_thumbnails">
              <div class="media_image">
                <?php $image_url =  get_the_post_thumbnail_url(); ?>
                <a href="<?php echo $link; ?>">
                  <img src="<?php echo $image_url; ?>">
                </a>
              </div>
              <div class="media_text">
                <span class="media_date"><?php echo get_the_date(); ?></span>
                <h5><?php the_title(); ?></h5>
                <div class="media_short_desc">
                  <p><?php the_excerpt(); ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php endwhile;
        wp_reset_postdata(); ?>
      </div>
    </div> -->
  </div>
</section>

<?php do_action('carl_footer'); ?>