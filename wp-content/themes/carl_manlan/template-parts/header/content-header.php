<header class="z-10">
  <nav class="topHeader container text-white uppercase py-6 flex flex-wrap justify-between gap-8 font-medium">
    <div class="logo text-3xl md:text-4xl"><a href="<?php echo site_url(); ?>">Carl Manlan</a></div>
    <?php
      wp_nav_menu([
        'menu'            => 'top',
        'theme_location'  => 'header-menu',
        'container'       => false,
        'menu_id'         => '',
        'menu_class'      => 'flex gap-6 text-sm align-middle content-center flex-wrap',
        'depth'           => 2,
        'fallback_cb'     => 'bs4navwalker::fallback',
        'walker'          => new bs4navwalker()
      ]);
    ?>
  </nav>

  <?php $post_type = get_post_type(); ?>
  <nav
    popover
    role="menubar"
    id="hamburgerMenu"
    class="bg-dark text-light flex flex-col gap-12 shadow uppercase fixed inset-0 ml-auto h-full overflow-y-auto min-w-[min(400px,_100%)] w-max max-h-full max-w-full py-8 content-start">
    <div class="head px-(--menu-padding-x) flex gap-4 justify-between">
      <div class="logo text-3xl md:text-4xl uppercase text-primary">
        <a href="<?php echo site_url(); ?>">Carl Manlan</a>
      </div>
      <button
        popovertarget="hamburgerMenu"
        class="grid place-content-center">
        <i
          data-feather="x"
          class="text-primary"
          width="32"
          height="32"></i>
      </button>
    </div>

    <div class="body grow relative overflow-x-clip">
      <div class="content flex flex-col gap-4">
          <div class="menuBlock px-(--menu-padding-x)">
          <a
            href="<?php echo site_url('home'); ?>"
            class="contents">
            <p
              class="text-xl  <?php if(is_page('104')){ echo 'text-primary';} if($post_type=='post'){ echo 'text-primary';}?>"
              role="heading">
              Home
            </p>
        </a>
        </div>
        <div class="menuBlock px-(--menu-padding-x)">
          <a
            href="<?php echo site_url('about'); ?>"
            class="contents">
            <p
              class="text-xl <?php if(is_page('84')){ echo 'text-primary';} ?>"
              role="heading">
              About
            </p>
          </a>
        </div>
        
        <div class="menuBlock px-(--menu-padding-x)">
          <a
            href="<?php echo site_url('media'); ?>"
            class="contents">
            <p
              class="text-xl  <?php if(is_page('104')){ echo 'text-primary';} if($post_type=='post'){ echo 'text-primary';}?>"
              role="heading">
              Media
            </p>
          </a>
        </div>
        <div class="menuBlock px-(--menu-padding-x)">
          <a
            href="<?php echo site_url('blueprint-for-change'); ?>"
            class="contents">
            <p
              class="text-xl  <?php if(is_page('114')){ echo 'text-primary';} if($post_type=='blueprints'){ echo 'text-primary';} ?>"
              role="heading">
              Blueprint For Change
            </p>
          </a>
        </div>
        <!-- <div class="menuBlock px-(--menu-padding-x)">
          <a
            href="<?php echo site_url('blueprint-for-success'); ?>"
            class="contents">
            <p
              class="text-xl  <?php if(is_page('116')){ echo 'text-primary';} ?>"
              role="heading">
              Blueprint For Success
            </p>
          </a>
        </div> -->
        <div class="menuBlock px-(--menu-padding-x)">
          <button class="btn-primary mx-auto mt-4" popovertarget="getintouch">
              Get In Touch
          </button>
        </div>
      </div>
    </div>

    <div class="foot px-(--menu-padding-x)">
      <div class="social-links">
        <ul class="flex gap-6 justify-around">
        <?php $instagram  = get_field('instagram', 'option');
                $linkedin   = get_field('linkedin', 'option');
                $x          = get_field('x', 'option');
                $facebook   = get_field('facebook', 'option');
                $youtube    = get_field('youtube', 'option');
                
            if($instagram){ ?>
             <li>
            <a href="<?php the_field('instagram'); ?>" target="_blank">
              <img
                loading="lazy"
                src="<?php echo DK_ASSEST_URI . '/icons/Instagram.svg'; ?>" />
            </a>
          </li>
          <?php } if($linkedin){ ?>
          <li>
            <a href="<?php the_field('linkedin'); ?>" target="_blank">
              <img
                loading="lazy"
                src="<?php echo DK_ASSEST_URI . '/icons/Linkedin.svg'; ?>" />
            </a>
          </li>
          <?php } if($facebook){ ?>
          <li>
            <a href="<?php the_field('facebook'); ?>" target="_blank">
              <img
                loading="lazy"
                src="<?php echo DK_ASSEST_URI . '/icons/Facebook.svg'; ?>" />
            </a>
          </li>
          <?php } if($x){ ?>
          <li>
            <a href="<?php the_field('x'); ?>" target="_blank">
              <img
                loading="lazy"
                src="<?php echo DK_ASSEST_URI . '/icons/X.svg'; ?>" />
            </a>
          </li>
          <?php } if($youtube){ ?>
          <li>
            <a href="<?php the_field('youtube'); ?>" target="_blank">
              <img
                loading="lazy"
                src="<?php echo DK_ASSEST_URI . '/icons/Youtube.svg'; ?>" />
            </a>
          </li>
          <?php } ?>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main class="grow">