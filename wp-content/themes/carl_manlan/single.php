<?php do_action('carl_header');
$blogID = get_the_ID();
$post_type = get_post_type(); ?>

<section class="mainGrid blog-section">
  <div class="content">
    <div class="left__part">
      <div id="blog-image" class="">
        <?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>
        <img src="<?php echo $url;?>" alt="image">
      </div>
      <div class="blog-details">
        <h2><?php the_title();?></h2>
        <p class="added-on"><?php echo get_the_date();?></p>
        <p class="desc"><?php the_content();?></p>
      </div>
    </div>
    <div class="right__part">
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
                          <a href="<?php echo $link;?>">
                              <img src="<?php echo $image_url;?>">
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
    </div>
  </div>
</section>

<?php do_action('carl_footer'); ?>