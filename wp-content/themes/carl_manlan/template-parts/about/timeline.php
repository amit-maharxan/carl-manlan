<section class="py-20 text-3xl uppercase text-light font-medium">
    <h1 class="container">
        <?php the_field('timeline_title'); ?>
    </h1>
</section>

<section class="relative w-full">
    <div class="timelineBg z-0 bg-secondary absolute inset-0 after:absolute after:inset-x-0 after:top-0 after:bottom-1/2 before:absolute before:inset-x-0 before:bottom-0 before:top-1/2"></div>
    <div class="hexBg bgEffect absolute inset-0" data-gradSize="100" data-box-dimension="180">
    </div>
    <div class="verticalTimeline grid auto-rows-[1fr] text-light text-start z-1 relative">
        <?php
        if (have_rows('timeline_data')):
            while (have_rows('timeline_data')) : the_row(); ?>
                <div class="timlineItem pb-4 container grid grid-cols-[90px_1fr] lg:grid-cols-3 gap-8 lg:gap-10 place-content-center relative z-1">
                    <div class="imgWrapper">
                        <img src="<?php the_sub_field('image'); ?>" alt="" />
                    </div>
                    <div class="separator content-center">
                        <div
                            class="year text-4xl md:text-5xl lg:text-8xl text-primary font-bold"
                            data-scrub-by=".char">
                            <?php the_sub_field('year'); ?>
                        </div>
                    </div>
                    <div
                        class="txtWrapper grid gap-4 content-center font-medium uppercase">
                        <h2
                            class="text-3xl"
                            data-scrub-by=".word">
                            <?php the_sub_field('description'); ?>
                        </h2>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>

    </div>
</section>