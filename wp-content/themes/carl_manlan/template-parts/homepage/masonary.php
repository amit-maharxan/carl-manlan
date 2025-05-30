<!-- <section class="container gap-4 text-light pt-10 ">
    <h1 class="uppercase text-3xl">Digital Scrapbook</h1>
    <div class="masonry pt-10 pb-20 font-over-the-rainbow">
        <?php
        if (have_rows('snaps_from_his_life')):
            while (have_rows('snaps_from_his_life')) : the_row(); ?>
                <div class="masonry__item mb-6">
                    <div class="imgWrapper w-full aspect-[3/2] bg-gray mb-4">
                        <img loading="lazy" src="<?php the_sub_field('hp_snaps_select_image'); ?>" alt="" />
                    </div>
                    <div class="txtWrapper">
                        <?php the_sub_field('hp_snaps_description'); ?>
                    </div>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section> -->