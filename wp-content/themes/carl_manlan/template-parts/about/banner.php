<section class="bannerSection font-medium w-full relative flex min-h-[55vh]">
    <div
        class="hexBg pattern2 bgEffect absolute inset-0 z-0"
        data-gradX="0.9"
        data-gradY="-0.5"
        data-gradSize="farthest-corner"
        data-box-dimension="180"></div>
    <div
        class="content pt-10 container grid max-lg:pb-6 lg:grid-cols-2 gap-8 mt-auto max-lg:text-center z-1">
        <div
            class="text-wrapper lg:py-8 uppercase text-white items-end content-center">
            <div data-by=".word">
                <h1 class="text-primary text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                    <?php the_field('about_page_title'); ?>
                </h1>
            </div>
        </div>
        <div
            class="txt-wrapper max-lg:mt-8 flex font-poppins font-bold text-light/75 m-auto"
            data-by=".word">
            <?php the_field('about_page_description'); ?>
        </div>
    </div>
</section>

<section class="relative parallax-image-container overflow-hidden w-screen h-[60vh]">
    <img src="<?php the_field('about_page_bg_image'); ?>" alt="Carl holding a book" class="w-full object-cover absolute bottom-0 left-0" />
</section>