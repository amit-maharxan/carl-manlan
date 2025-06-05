<section class="text-white my-20">
  <div class="container flex justify-between mb-6">
    <h1 class="uppercase text-3xl"><?php echo get_field('hp_timeline_title'); ?></h1>
    <?php $link = get_sub_field('hp_timeline_button');
    if ($link):
      $link_url   = $link['url'];
      $link_title = $link['title']; ?>
      <a href="<?php echo $link_url; ?>" class="btn-primary"><?php echo $link_title; ?></a>
    <?php endif; ?>
  </div>
  <div class="timelineSliders bleedOutRight">
    <div class="splide dateSlider">
      <div class="splide__track">
        <ul class="splide__list text-center">
          <?php if (have_rows('timeline_data', 84)):
            while (have_rows('timeline_data', 84)) : the_row(); ?>
              <li class="splide__slide">
                <span class="max-w-max"><?php echo get_sub_field('year'); ?></span>
              </li>
          <?php endwhile;
          endif; ?>
        </ul>
      </div>
    </div>
    <div class="splide imgSlider">
      <div class="splide__track">
        <ul class="splide__list">
          <?php
          if (have_rows('timeline_data', 84)):
            while (have_rows('timeline_data', 84)) : the_row(); ?>
              <li class="splide__slide">
                <img
                  loading="lazy"
                  src="<?php echo get_sub_field('image'); ?>"
                  alt="" />
                <p class="text-center uppercase">
                  <?php $desc = get_sub_field('description');
                  echo strip_tags($desc); ?>
                </p>
              </li>
          <?php endwhile;
          endif; ?>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="relative">
  <video
    autoplay
    muted
    loop
    src="<?php echo get_field('hp_video_file'); ?>"
    class="w-full max-h-screen object-cover"></video>
  <p
    class="uppercase text-primary font-medium text-[calc(4rem_+_10vw)] absolute inset-0 m-auto max-w-max max-h-max"
    data-scrub-by=".word">
    <?php echo get_field('hp_video_title'); ?>
  </p>
</section>


<!-- Ig -->
<section class="uppercase font-medium py-20">
  <div class="container">
      
      <?php echo do_shortcode("[trustindex-feed-instagram]"); ?>
      
    <!--<div class="ig grid grid-flow-col gap-6">-->
    
    <!--  <img-->
    <!--    loading="lazy"-->
    <!--    src="<?php echo DK_ASSEST_URI . '/images/ig1.png'; ?>"-->
    <!--    alt="" />-->
    <!--  <img-->
    <!--    loading="lazy"-->
    <!--    src="<?php echo DK_ASSEST_URI . '/images/ig2.png'; ?>"-->
    <!--    alt="" />-->
    <!--  <img-->
    <!--    loading="lazy"-->
    <!--    src="<?php echo DK_ASSEST_URI . '/images/ig3.jpeg'; ?>"-->
    <!--    alt="" />-->
    <!--  <img-->
    <!--    loading="lazy"-->
    <!--    src="<?php echo DK_ASSEST_URI . '/images/ig4.png'; ?>"-->
    <!--    alt="" />-->
    <!--  <img-->
    <!--    loading="lazy"-->
    <!--    src="<?php echo DK_ASSEST_URI . '/images/ig5.jpeg'; ?>"-->
    <!--    alt="" />-->
    <!--</div>-->
    <div class="flex flex-wrap justify-center gap-x-12 gap-y-6 mt-10">
      <button class="btn-secondary !flex gap-2 !min-w-[265px]">
        <img
          loading="lazy"
          height="20"
          width="20"
          src="<?php echo DK_ASSEST_URI . '/icons/Instagram.svg'; ?>" />
        <span> <a class="scbtn-hover" href="<?php the_field('hp_button_1_url');?>" target="_blank"><?php the_field('hp_button_1_text');?></a> </span>
      </button>

      <button class="btn-secondary !flex gap-2 !min-w-[265px]">
        <img
          loading="lazy"
          height="20"
          width="20"
          src="<?php echo DK_ASSEST_URI . '/icons/Linkedin.svg'; ?>" />
        <span> <a class="scbtn-hover" href="<?php the_field('hp_button_2_url');?>" target="_blank"><?php the_field('hp_button_2_text');?></a> </span>
      </button>
    </div>
  </div>
</section>