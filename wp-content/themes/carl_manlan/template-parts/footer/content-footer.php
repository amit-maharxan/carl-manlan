</main>

<footer class="curtain">
  <?php if(is_front_page()): ?>
    <!-- form -->
    <section class="uppercase font-medium bg-secondary py-20">
        <div class="container">
            <h1 class="text-3xl text-center mb-10">Get in touch</h1>
            <div class="flex flex-col gap-6 max-w-[44rem] mx-auto">
                <?php echo do_shortcode('[contact-form-7 id="f4ce931" title="Contact form"]') ?>
            </div>
        </div>
    </section>
  <?php endif; ?>

  <?php if(is_page('116')){ ?>
    <section class="relative py-20">
      <div
        class="hexBg pattern3 bgEffect absolute inset-0 z-0 after:z-0 after:block after:inset-0 after:absolute after:bg-linear-to-b after:from-dark after:via-dark/40 after:via-10% after:to-dark/40"
        data-gradX="0.9"
        data-gradY="0.5"
        data-gradSize="farthest-corner"
        data-box-dimension="212"></div>
      <div class="container relative z-1 text-light text-center">
        <h1 class="text-3xl font-medium uppercase">
          <?php echo get_field('success_form_title');?>
        </h1>
        <p class="mt-10 font-poppins text-light/75 font-bold text-xs/relaxed">
          <?php echo get_field('success_form_desc');?>
        </p>
        <?php $shortcode = get_field('success_form_shortcode');
        echo do_shortcode($shortcode);?>
      </div>
    </section>

    <script>
      $(document).ready(function() {
        $('form').addClass('flex flex-col gap-6 max-w-[44rem] mx-auto text-left mt-10');
        $('.bg-light25').addClass('bg-light/25');
      });
    </script>
  <?php } ?>

  <div class="bg-gray py-4">
    <div
      class="container flex flex-wrap gap-x-8 gap-y-4 justify-between font-medium text-xs uppercase">
      <nav class="grid place-content-center">
        <?php
          wp_nav_menu(array(
              'theme_location' => 'footer-menu',
              'container' => '',
              'menu_class' => 'flex gap-6'
          ));
        ?>
      </nav>
      <div class="social-links max-md:w-full">
        <ul class="flex justify-around gap-6">
          <li>
            <a href="<?php the_field('linkedin');?>" target="_blank">
            <img
              loading="lazy"
              src="<?php echo DK_ASSEST_URI.'/icons/Linkedin.svg';?>" />
            </a>
          </li>
          <li>
            <a href="<?php the_field('facebook');?>" target="_blank">
            <img
              loading="lazy"
              src="<?php echo DK_ASSEST_URI.'/icons/Facebook.svg';?>" />
            </a>
          </li>
          <li>
            <a href="<?php the_field('x');?>" target="_blank">
            <img
              loading="lazy"
              src="<?php echo DK_ASSEST_URI.'/icons/X.svg';?>" />
            </a>
          </li>
          <li>
            <a href="<?php the_field('youtube');?>" target="_blank">
            <img
              loading="lazy"
              src="<?php echo DK_ASSEST_URI.'/icons/Youtube.svg';?>" />
            </a>
          </li>
          <li>
            <a href="<?php the_field('instagram');?>" target="_blank">
            <img
              loading="lazy"
              src="<?php echo DK_ASSEST_URI.'/icons/Instagram.svg';?>" />
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>