<section class="relative w-full">
    <div
        class="hexBg pattern1 bgEffect absolute inset-0 z-0 after:z-0 after:block after:inset-0 after:absolute after:bg-linear-to-b after:from-dark after:via-dark/40 after:via-20% after:via-dark/40 after:via-80% after:to-dark"
        data-gradX="0.9"
        data-gradY="0.5"
        data-gradSize="farthest-corner"
        data-box-dimension="180"></div>
    <!-- <div class="container grid gap-x-24 gap-y-12 py-20 pb-10 md:grid-cols-1 text-light font-medium">

    </div> -->
    <div
        class="content container grid lg:grid-cols-2 gap-8 mt-auto max-lg:text-center z-1 relative">
        <div
            class="text-wrapper lg:py-8 text-light/75 items-end content-center">
            <h2 class="text-3xl/relaxed uppercase z-1 relative font-medium mb-10">
                <?php echo get_field('success_description_left'); ?>
            </h2>
            <div data-by=".word">
                <p class="font-poppins font-bold text-light/75">
                    <?php echo get_field('success_description_right'); ?>
                </p>
                <h2 class="text-2xl uppercase font-medium my-6">
                    <?php echo get_field('mission_title'); ?>
                </h2>
                <p class="text-sm font-poppins font-bold">
                    <?php echo get_field('mission_description'); ?>
                </p>
            </div>
        </div>
        <div class="img-wrapper flex relative group max-w-max ml-auto">
            <div class="playBtn absolute z-1 inset-0 max-h-16 max-w-16 rounded-full grid place-content-center-safe m-auto bg-secondary/75 group-hover:bg-secondary transition duration-600">
                <svg width="17" height="25" viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.441408 1.56712C0.441408 0.930879 1.16555 0.565559 1.67726 0.943643L16.3837 11.8096C16.8031 12.1195 16.8031 12.7467 16.3837 13.0565L1.67728 23.9235C1.16558 24.3016 0.441406 23.9363 0.441406 23.3L0.441408 1.56712Z" fill="#F5F5F5" />
                </svg>
            </div>
            <?php $video_url = get_field('mission_video');
            if ($video_url): ?>
                <video width="640" height="360" class="rounded-lg max-md:mx-auto md:ml-auto mb-10 max-h-[50rem] w-auto">
                    <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            <?php endif; ?>
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