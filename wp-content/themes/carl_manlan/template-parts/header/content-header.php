<header class="z-10">
  <nav
    class="topHeader container text-white uppercase py-6 flex flex-wrap justify-between gap-8 font-medium">
    <div class="logo text-3xl md:text-4xl">Carl Manlan</div>

    <ul class="flex gap-6 text-xs align-middle content-center flex-wrap">
      <li class="content-center max-md:hidden">About</li>
      <li class="content-center max-md:hidden">Media</li>
      <li class="content-center max-md:hidden">Bluepint for Change</li>
      <li class="content-center max-md:hidden">Bluepint for Success</li>
      <li class="content-center max-md:hidden">
        <button class="btn-primary">Get In Touch</button>
      </li>
      <li class="md:hidden">
        <button
          class="btn-hamburger"
          popovertarget="hamburgerMenu">
          <i data-feather="menu"></i>
        </button>
      </li>
    </ul>
  </nav>
  <nav
    popover
    role="menubar"
    id="hamburgerMenu"
    class="bg-dark text-light flex flex-col gap-12 shadow uppercase fixed inset-0 ml-auto h-full overflow-y-auto min-w-[min(400px,_100%)] w-max max-h-full max-w-full py-8 content-start">
    <div class="head px-(--menu-padding-x) flex gap-4 justify-between">
      <div class="logo text-3xl md:text-4xl uppercase text-primary">
        Carl Manlan
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
            href=""
            class="contents">
            <p
              class="text-xl"
              role="heading">
              About
            </p>
          </a>
        </div>
        <div class="menuBlock px-(--menu-padding-x)">
          <a
            href=""
            class="contents">
            <p
              class="text-xl"
              role="heading">
              Media
            </p>
          </a>
        </div>
        <div class="menuBlock px-(--menu-padding-x)">
          <a
            href=""
            class="contents">
            <p
              class="text-xl"
              role="heading">
              Blueprint For Change
            </p>
          </a>
        </div>
        <div class="menuBlock px-(--menu-padding-x)">
          <a
            href=""
            class="contents">
            <p
              class="text-xl"
              role="heading">
              Blueprint For Success
            </p>
          </a>
        </div>
        <!-- <div class="menuBlock px-(--menu-padding-x)">
          <p
            class="text-xl"
            role="heading">
            Multi Menu
          </p>
          <details>
            <summary class="flex justify-between">
              Item 1 <i data-feather="arrow-right"></i>
            </summary>
            <div
              class="detailBody px-(--menu-padding-x) absolute inset-0 bg-inherit">
              <div class="goback flex gap-6">
                <i data-feather="arrow-left"></i>
                <p role="text-xl font-bold">Main Menu</p>
              </div>
              <hr class="bg-gray-500 py-2" />
              <p
                role="heading"
                class="text-xl py-4 block">
                Item 1
              </p>
              <ul>
                <li><a href="#">SubItem 1</a></li>
                <li><a href="#">SubItem 2</a></li>
                <li><a href="#">SubItem 3</a></li>
                <li><a href="#">SubItem 4</a></li>
                <li><a href="#">SubItem 5</a></li>
                <li><a href="#">SubItem 6</a></li>
              </ul>
            </div>
          </details>
        </div> -->
        <div class="menuBlock px-(--menu-padding-x)">
          <button class="btn-primary mt-4">Get In Touch</button>
        </div>
      </div>
    </div>
    <div class="foot px-(--menu-padding-x)">
      <div class="social-links">
        <ul class="flex gap-6 justify-around">
          <li>
            <img
              loading="lazy"
              src="./assets/icons/Linkedin.svg" />
          </li>
          <li>
            <img
              loading="lazy"
              src="./assets/icons/Facebook.svg" />
          </li>
          <li>
            <img
              loading="lazy"
              src="./assets/icons/X.svg" />
          </li>
          <li>
            <img
              loading="lazy"
              src="./assets/icons/Youtube.svg" />
          </li>
          <li>
            <img
              loading="lazy"
              src="./assets/icons/Instagram.svg" />
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<main class="grow">

<?php
  // wp_nav_menu([
  //     'menu'            => 'top',
  //     'theme_location'  => 'header-menu',
  //     'container'       => false,
  //     'menu_id'         => '',
  //     'menu_class'      => '',
  //     'depth'           => 2,
  //     'fallback_cb'     => 'bs4navwalker::fallback',
  //     'walker'          => new bs4navwalker()
  // ]);
?>