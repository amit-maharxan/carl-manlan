<section class="font-medium uppercase bg-light text-center">
    <div class="container pt-20">
        <div class="headingWrapper exclude" data-scrub-by=".word">
            <?php echo get_field('hp_news_title'); ?>
        </div>
        <div class="splide logos-slider mt-10 !visible">
            <div class="splide__track">
                <!-- <ul class="splide__list btnGroup flex justify-around gap-6 mx-auto flex-wrap"> -->
                <ul class="splide__list btnGroup">
                    <?php
                    if (have_rows('hp_logos')):
                        while (have_rows('hp_logos')) : the_row(); ?>
                            <li class="splide__slide">
                                <a href="<?php the_sub_field('url'); ?>" class="rounded-[8px] px-10 py-6 uppercase text-xl font-medium">
                                    <img src="<?php the_sub_field('logo'); ?>" alt="" class="max-h-20 max-w-max" />
                                </a>
                            </li>
                    <?php endwhile;
                    endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <div class="container mt-10">
        <div class="flex justify-between">
            <div class="btnGroup gap-4 flex">
                <button class="rounded-full border border-primary w-12 h-12 relative group" data-prev>
                    <svg
                        width="14"
                        height="22"
                        aria-hidden="true"
                        class="absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] group-hover:text-primary transition">
                        <use href="#icon-arrow-right"></use>
                    </svg>
                </button>
                <button class="rounded-full border border-primary w-12 h-12 relative group" data-next>
                    <svg
                        width="14"
                        height="22"
                        aria-hidden="true"
                        class="-scale-x-100 absolute top-[50%] left-[50%] translate-x-[-50%] translate-y-[-50%] group-hover:text-primary transition">
                        <use href="#icon-arrow-right"></use>
                    </svg>
                </button>
            </div>
            <?php $link = get_field('hp_news_button');
            if ($link):
                $link_url   = $link['url'];
                $link_title = $link['title']; ?>
                <a href="<?php echo $link_url; ?>" class="btn-primary"><?php echo $link_title; ?></a>
            <?php endif; ?>
        </div>
    </div>
    <div class="splide newsSlider pt-10 pb-20">
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                $wp_query = new WP_Query(array(
                    'post_type'      => 'news-stories', // Fetch regular WordPress posts
                    'posts_per_page' => 20, // Number of posts to display
                ));
                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
                    <li class="splide__slide">
                        <a href="<?php the_permalink(); ?>">
                            <div class="imgWrapper">
                                <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
                            </div>
                            <p class="text-start text-xl">
                                <?php the_title(); ?>
                            </p>
                        </a>
                    </li>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </ul>
        </div>
    </div>
</section>

<!-- bp 4 success -->
<section class="font-medium uppercase text-light pt-40 max-[800px]:pt-20">
    <div class="relative flex flex-col">
        <div class="splide bgImgSlider max-lg:order-1 max-lg:mt-10">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php
                    $images = get_field('hp_background_slider');
                    if ($images):
                        foreach ($images as $image): ?>
                            <li class="splide__slide">
                                <img src="<?php echo $image; ?>" alt="" />
                            </li>
                    <?php endforeach;
                    endif; ?>
                </ul>
            </div>
        </div>

        <div class="container text-center lg:absolute inset-0 my-auto py-auto max-h-max flex flex-col gap-6">
            <p class="text-3xl/relaxed" data-scrub-by=".word">
                <?php echo get_field('hp_blog_title'); ?>
            </p>
            <?php $link = get_field('hp_blog_button');
            if ($link):
                $link_url   = $link['url'];
                $link_title = $link['title']; ?>
                <a href="<?php echo $link_url; ?>" class="btn-primary mt-6 mx-auto"><?php echo $link_title; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>