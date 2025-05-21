<section class="bannerSection font-medium w-full relative flex">
    <div class="hexBg pattern1 linear-grad-mask bgEffect absolute inset-0 z-0" data-gradX="0.8" data-gradY="0.6"></div>
    <div class="content container grid lg:grid-cols-2 gap-8 mt-auto max-lg:text-center z-1">
        <div class="text-wrapper lg:py-8 uppercase text-white items-end content-center">
            <div data-by=".word">
                <h1 class="text-primary text-5xl md:text-6xl lg:text-7xl xl:text-8xl">
                    <?php echo get_field('hp_banner_title'); ?>
                </h1>
                <p class="text-xl lg:text-3xl py-10">
                    <?php echo get_field('hp_banner_description'); ?>
                </p>
            </div>
            <?php $link = get_field('hp_banner_button');
            if ($link):
                $link_url   = $link['url'];
                $link_title = $link['title']; ?>
                <a href="<?php echo $link_url; ?>" class="btn-primary"><?php echo $link_title; ?></a>
            <?php endif; ?>
        </div>
        <div class="img-wrapper max-lg:mt-8 flex">
            <img
                loading="eager"
                src="<?php echo get_field('hp_banner_image'); ?>"
                class="max-h-[80vh] w-full mx-auto mt-auto object-scale-down"
                width="500"
                height="500"
                alt="" />
        </div>
    </div>
</section>

<section class="container my-20">
    <div class="text-light">
        <h1 class="uppercase text-3xl"><?php the_field('hp_podcast_title');?></h1>
        <h1 class="uppercase text-3xl description text-primary"><?php the_field('hp_podcast_desc');?></h1>
    </div>
    <div class="cardWrapper pb-8 uppercase font-medium">
        <div class="splide podcastSlider pt-10 pb-20">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php if( have_rows('hp_podcast_playlists') ):
                        while( have_rows('hp_podcast_playlists') ) : the_row();
                        $url = get_sub_field('url');
                        
                        // Parse the URL and get the query string
                        parse_str(parse_url($url, PHP_URL_QUERY), $params);

                        // Extract the video ID
                        $videoId = $params['v'] ?? null;

                        if ($videoId) {
                            // Build the thumbnail URL
                            $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/hqdefault.jpg";
                        } ?>
                        <li class="splide__slide">
                            <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <div class="imgWrapper">
                                    <img loading="lazy" src="<?php echo $thumbnailUrl; ?>" alt=""/>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="container my-20">
    <div class="flex justify-between mb-10 text-light">
        <h1 class="uppercase text-3xl">Blueprints For Success</h1>
        <a href="<?php echo site_url('blueprint-for-success'); ?>" class="btn-primary !flex my-auto">View All</a>
    </div>
    <div class="cardWrapper pb-8 grid grid-cols-[repeat(auto-fill,_minmax(350px,_1fr))] gap-12 uppercase font-medium">
        <?php if (have_rows('hp_cards')):
            while (have_rows('hp_cards')): the_row(); ?>
                <!-- <div class="card w-full flex flex-col border <?php echo get_sub_field('color_codes'); ?> p-8 min-h-[350px] md:min-h-[500px] max-w-[min(100%,400px)] mx-auto"> -->
                <div class="card w-full flex flex-col border rounded-xl p-8 min-h-[350px] md:min-h-[500px] max-w-[100%] mx-auto <?php echo get_sub_field('color_codes'); ?>">
                    <img
                        loading="lazy"
                        src="<?php echo get_sub_field('image'); ?>"
                        class="max-h-20 max-w-max"
                        alt="" />
                    <p class="text-2xl lg:text-3xl mt-auto py-8">
                        <?php $title = get_sub_field('title');
                        echo get_sub_field('title'); ?>
                    </p>
                    <?php $link = get_sub_field('button');
                    if ($link):
                        $link_url   = $link['url'];
                        $link_title = $link['title'];
                        $result     = get_sub_field('category'); ?>
                        <a href="<?php echo site_url('blueprint-for-change') . '?filter=' . strtolower($result); ?>" class="btn-light"><?php echo $link_title; ?></a>
                    <?php endif; ?>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</section>