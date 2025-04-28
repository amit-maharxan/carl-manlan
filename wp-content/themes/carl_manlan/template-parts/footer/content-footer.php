</main>

<footer class="curtain">
  <?php if(is_front_page()): ?>
  <!-- Ig -->
  <section class="uppercase font-medium py-20">
    <div class="container">
      <div class="ig grid grid-flow-col gap-6">
        <img
          loading="lazy"
          src="<?php echo DK_ASSEST_URI.'/images/ig1.png';?>"
          alt="" />
        <img
          loading="lazy"
          src="<?php echo DK_ASSEST_URI.'/images/ig2.png';?>"
          alt="" />
        <img
          loading="lazy"
          src="<?php echo DK_ASSEST_URI.'/images/ig3.jpeg';?>"
          alt="" />
        <img
          loading="lazy"
          src="<?php echo DK_ASSEST_URI.'/images/ig4.png';?>"
          alt="" />
        <img
          loading="lazy"
          src="<?php echo DK_ASSEST_URI.'/images/ig5.jpeg';?>"
          alt="" />
      </div>
      <div class="flex flex-wrap justify-center gap-x-12 gap-y-6 mt-10">
        <button class="btn-secondary !flex gap-2">
          <img
            loading="lazy"
            height="20"
            width="20"
            src="<?php echo DK_ASSEST_URI.'/icons/Instagram.svg';?>" />
          <span> Follow Carl on Instagram </span>
        </button>

        <button class="btn-secondary !flex gap-2">
          <img
            loading="lazy"
            height="20"
            width="20"
            src="<?php echo DK_ASSEST_URI.'/icons/Linkedin.svg';?>" />
          <span> Follow Carl on Linkedin </span>
        </button>
      </div>
    </div>
  </section>
  <?php endif; ?>

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

<?php
  // wp_nav_menu(array(
  //     'theme_location' => 'footer-menu-1',
  //     'container' => '',
  //     'menu_class' => 'menuList'
  // ));
?>