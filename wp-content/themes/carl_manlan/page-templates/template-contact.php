<?php
/**
 * Template Name: Contact Layout
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
        <small> Home / Contact Us </small>
        <h1>Contact Us</h1>
      </div>
    </div>
  </div>
</section>
<!-- Hero End -->

<section class="mainGrid contact">
  <div class="content">
    <div class="contactGrid">
      <div class="abt">
        <h1>Get in touch</h1>
        <?php the_content(); ?>

        <h2>Reach Out to Us</h2>
        <ul class="iconList">
          <li style="--iconUrl: url('<?php echo DK_IMG . '/address icon.svg'; ?>')">
            <?php the_field('address', 'option');?>
          </li>
          <li style="--iconUrl: url('<?php echo DK_IMG . '/mail.svg'; ?>')">
            <?php the_field('email_address', 'option');?>
          </li>
          <li style="--iconUrl: url('<?php echo DK_IMG . '/phone.svg'; ?>')">
            <?php the_field('phone_number', 'option');?>
          </li>
        </ul>
        <div class="socials">
          <a href="<?php the_field('facebook', 'option');?>"><img src="<?php echo DK_IMG . '/facebook ixon.svg'; ?>" /></a>
          <a href="<?php the_field('x', 'option');?>"><img src="<?php echo DK_IMG . '/x icon.svg'; ?>" /></a>
          <a href="<?php the_field('youtube', 'option');?>"><img src="<?php echo DK_IMG . '/youtube icon.svg'; ?>" /></a>
          <a href="<?php the_field('instagram', 'option');?>"><img src="<?php echo DK_IMG . '/instagram.svg'; ?>" /></a>
          <a href="<?php the_field('linkedin', 'option');?>"><img src="<?php echo DK_IMG . '/linkedin.svg'; ?>" /></a>
        </div>
      </div>
      <div class="form">
        <?php echo do_shortcode('[contact-form-7 id="df6de72" title="Contact form"]');?>
      </div>
    </div>
  </div>
</section>

<?php do_action('carl_footer'); ?>