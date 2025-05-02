<section class="bannerSection font-medium w-full relative flex">
    <div
        class="hexBg pattern1 linear-grad-mask bgEffect absolute inset-0 z-0"
        data-gradX="0.8"
        data-gradY="0.6"></div>
    <div
        class="content container grid lg:grid-cols-2 gap-8 mt-auto max-lg:text-center z-1">
        <div
        class="text-wrapper lg:py-8 uppercase text-white items-end content-center">
        <div data-by=".word">
            <h1
            class="text-primary text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
            <?php echo get_field('hp_banner_title');?>
            </h1>
            <p class="text-xl lg:text-3xl py-10">
            <?php echo get_field('hp_banner_description');?>
            </p>
        </div>
        <?php $link = get_field('hp_banner_button');
            if( $link ): 
                $link_url   = $link['url'];
                $link_title = $link['title']; ?>
            <a href="<?php echo $link_url;?>" class="btn-primary"><?php echo $link_title;?></a>
        <?php endif; ?>
        </div>
        <div class="img-wrapper max-lg:mt-8 flex">
        <img
            loading="eager"
            src="<?php echo get_field('hp_banner_image');?>"
            class="max-h-[80vh] mx-auto mt-auto object-scale-down"
            width="500"
            height="500"
            alt="" />
        </div>
    </div>
</section>

<section class="container">
    <div class="cardWrapper pb-8 grid grid-cols-[repeat(auto-fill,_minmax(350px,_1fr))] gap-12 uppercase font-medium">
        <?php if( have_rows('hp_cards') ):
        while( have_rows('hp_cards') ): the_row(); ?>
        <div class="card w-full flex flex-col border <?php echo get_sub_field('color_codes');?> p-8 min-h-[350px] md:min-h-[500px] max-w-[min(100%,400px)] mx-auto">
            <img
                loading="lazy"
                src="<?php echo get_sub_field('image');?>"
                class="max-h-20 max-w-max"
                alt="" />
            <p class="text-2xl lg:text-3xl mt-auto py-8">
                <?php echo get_sub_field('title');?>
            </p>
            <?php $link = get_sub_field('button');
            if( $link ): 
                $link_url   = $link['url'];
                $link_title = $link['title']; ?>
            <a href="<?php echo $link_url;?>" class="btn-light hover:!text-light"><?php echo $link_title;?></a>
            <?php endif; ?>
        </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>