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
        <h1 class="uppercase text-3xl font-medium"><?php the_field('hp_podcast_title'); ?></h1>
        <h2 class="uppercase text-2xl description font-medium text-primary"><?php the_field('hp_podcast_desc'); ?></h2>
    </div>
    <div class="cardWrapper pb-8 uppercase font-medium">
        <div class="splide podcastSlider py-10">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $wp_query = new WP_Query(array(
                        'post_type'      => 'podcasts', // Fetch regular WordPress posts
                        'posts_per_page' => 20, // Number of posts to display
                        'orderby'        => 'date', // Order by date
                    ));
                    while ($wp_query->have_posts()) : $wp_query->the_post();
                        $url = get_field('podcasts_url');

                        // Parse the URL and get the query string
                        parse_str(parse_url($url, PHP_URL_QUERY), $params);

                        // Extract the video ID
                        $videoId = $params['v'] ?? null;

                        if ($videoId) {
                            // Build the thumbnail URL
                            $thumbnailUrl = "https://img.youtube.com/vi/{$videoId}/mqdefault.jpg";
                        } ?>
                        <li class="splide__slide group">
                            <a href="<?php the_sub_field('url'); ?>" target="_blank">
                                <div class="imgWrapper relative">
                                    <div class="playBtn absolute inset-0 max-h-16 max-w-16 rounded-full grid place-content-center-safe m-auto bg-secondary/75 group-hover:bg-secondary transition duration-600">
                                        <svg width="17" height="25" viewBox="0 0 17 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.441408 1.56712C0.441408 0.930879 1.16555 0.565559 1.67726 0.943643L16.3837 11.8096C16.8031 12.1195 16.8031 12.7467 16.3837 13.0565L1.67728 23.9235C1.16558 24.3016 0.441406 23.9363 0.441406 23.3L0.441408 1.56712Z" fill="#F5F5F5" />
                                        </svg>
                                    </div>
                                    <img loading="lazy" src="<?php echo $thumbnailUrl; ?>" alt="" class="object-cover w-full h-auto rounded-xl" />
                                </div>
                                <h1 class="font-medium text-xl uppercase text-secondary mt-2">
                                    <?php the_title(); ?>
                                </h1>
                            </a>
                        </li>
                    <?php endwhile;
                    wp_reset_query(); ?>
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
                <div class="card w-full flex flex-col border rounded-xl p-8 min-h-[350px] md:min-h-[380px] max-w-[100%] mx-auto <?php echo get_sub_field('color_codes'); ?>">
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