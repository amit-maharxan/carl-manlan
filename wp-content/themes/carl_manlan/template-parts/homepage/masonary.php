<section class="container gap-4 text-light font-over-the-rainbow pt-10 pb-20">
    <div class="masonry">
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
</section>