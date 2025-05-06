<section class="container gap-4 text-light font-over-the-rainbow pb-20">
    <div class="masonry">
        <?php
            if( have_rows('snaps_from_his_life') ):
                while( have_rows('snaps_from_his_life') ) : the_row(); ?>
            <div class="masonry__item">
                <div class="imgWrapper w-full aspect-[3/2] bg-gray">
                    <img loading="lazy" src="<?php the_sub_field('hp_snaps_select_image');?>" alt="" />
                </div>
                <?php the_sub_field('hp_snaps_description');?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<!-- form -->
<section class="uppercase font-medium bg-secondary py-20">
    <div class="container">
        <h1 class="text-3xl text-center mb-10">Get in touch</h1>
        <div class="flex flex-col gap-6 max-w-[44rem] mx-auto">
            <?php echo do_shortcode('[contact-form-7 id="f4ce931" title="Contact form"]')?>
        </div>
    </div>
</section>