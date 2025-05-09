<section class="text-white pt-8 pb-20">
    <div class="container flex justify-between mb-6">
        <h1 class="uppercase text-3xl"><?php echo get_field('hp_timeline_title');?></h1>
        <?php $link = get_sub_field('hp_timeline_button');
            if( $link ): 
                $link_url   = $link['url'];
                $link_title = $link['title']; ?>
            <a href="<?php echo $link_url;?>" class="btn-primary"><?php echo $link_title;?></a>
        <?php endif; ?>
    </div>
    <div class="timelineSliders bleedOutRight">
        <div class="splide dateSlider">
        <div class="splide__track">
            <ul class="splide__list text-center">
            <?php if( have_rows('hp_timeline') ):
            while( have_rows('hp_timeline') ): the_row(); ?>
                <li class="splide__slide">
                    <span class="max-w-max"><?php echo get_sub_field('year');?></span>
                </li>
            <?php endwhile; endif; ?>
            </ul>
        </div>
        </div>
        <div class="splide imgSlider">
        <div class="splide__track">
            <ul class="splide__list">
            <?php
            if( have_rows('timeline_data', 84) ):
                while( have_rows('timeline_data', 84) ) : the_row(); ?>
                <li class="splide__slide">
                    <img
                    loading="lazy"
                    src="<?php echo get_sub_field('image');?>"
                    alt="" />
                    <p class="text-center uppercase">
                    <?php $desc = get_sub_field('description');
                    echo strip_tags($desc);?>
                    </p>
                </li>
            <?php endwhile; endif; ?>
            </ul>
        </div>
        </div>
    </div>
</section>

<section class="relative">
    <video
        autoplay
        muted
        loop
        src="<?php echo get_field('hp_video_file');?>"
        class="w-full max-h-screen object-cover"></video>
    <p
        class="uppercase text-primary font-medium text-[calc(4rem_+_10vw)] absolute inset-0 m-auto max-w-max max-h-max"
        data-scrub-by=".char">
        <?php echo get_field('hp_video_title');?>
    </p>
</section>