<section class="relative w-full">
    <div
        class="hexBg pattern1 bgEffect absolute inset-0 z-0 after:z-0 after:block after:inset-0 after:absolute after:bg-linear-to-b after:from-dark after:via-dark/40 after:via-20% after:via-dark/40 after:via-80% after:to-dark"
        data-gradX="0.9"
        data-gradY="0.5"
        data-gradSize="farthest-corner"
        data-box-dimension="180"></div>
    <div class="container grid py-20 md:grid-cols-2 text-light font-medium">
        <h2 class="text-3xl/relaxed uppercase  z-1 relative">
            <?php echo get_field('success_description_left'); ?>
        </h2>
        <p
            class="font-poppins font-bold "
            data-scrub-by=".word">
            <?php echo get_field('success_description_right'); ?>
        </p>
    </div>
    <div
        class="content container grid lg:grid-cols-2 gap-8 mt-auto max-lg:text-center z-1 relative">
        <div
            class="text-wrapper lg:py-8 uppercase text-light/75 items-end content-center">
            <div data-by=".word">
                <h2 class="text-2xl uppercase font-medium">
                    <?php echo get_field('mission_title'); ?>
                </h2>
                <p class="text-sm font-poppins font-bold py-10">
                    <?php echo get_field('mission_description'); ?>
                </p>
            </div>
        </div>
        <div class="img-wrapper flex">
            <img
                loading="eager"
                src="<?php echo get_field('mission_image'); ?>"
                class="max-h-[80vh] mx-auto mt-auto object-scale-down"
                width="500"
                height="500"
                alt="" />
        </div>
    </div>
</section>

<section class="cardSection">
    <div class="container grid grid-cols-[repeat(auto-fit,_minmax(340px,_1fr))] gap-10 bg-dark text-light font-medium">
        <?php $i = 1;
        if (have_rows('blueprints_lists')):
            while (have_rows('blueprints_lists')) : the_row(); ?>
                <div class="card p-10 grid gap-6 border rounded-2xl border-light">
                    <span class="block text-9xl text-dark txtStroke"><?php echo $i++; ?></span>
                    <h1 class="text-3xl uppercase">
                        <?php echo get_sub_field('title') ?>
                    </h1>
                    <ul
                        class="font-poppins font-bold list-disc list-outside ml-4 text-xs space-y-1 text-light/75">
                        <?php
                        if (have_rows('points')):
                            while (have_rows('points')) : the_row(); ?>
                                <li><?php echo get_sub_field('point'); ?></li>
                        <?php endwhile;
                        endif; ?>
                    </ul>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>