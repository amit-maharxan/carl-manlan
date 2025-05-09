<section class="bannerSection font-medium w-full relative flex min-h-[40vh]">
    <div
        class="hexBg after:absolute after:inset-0 after:bg-linear-to-b after:from-dark/30 after:via-dark/30 after:via-70% after:to-dark bgEffect absolute inset-0 z-0"
        data-gradX="0.8"
        data-gradY="-0.5"
        data-gradSize="farthest-corner"
        data-box-dimension="180"></div>
    <div
        class="content container max-lg:pb-6 mt-auto max-lg:text-center z-1">
        <div
            class="text-wrapper lg:py-16 uppercase text-white items-end content-center font-medium">
            <div data-by=".word">
                <h1 class="text-xl/relaxed md:text-3xl/relaxed text-center">
                    <?php echo strip_tags(get_the_content()); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<section class="mediaSection font-medium uppercase text-light w-full py-10">
    <div class="container mediaGrid">
        <?php
        $wp_query = new WP_Query(array(
            'post_type'      => 'post', // Fetch regular WordPress posts
            'posts_per_page' => -1, // Number of posts to display
        ));
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="contents">
                <div class="card">
                    <div class="imgWrapper rounded-md bg-gray w-full aspect-[3/2]">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="rounded-md w-full aspect-[3/2]" />
                    </div>
                    <div class="txtWrapper">
                        <h2 class="text-xl">
                            <?php the_title(); ?>
                        </h2>
                    </div>
                </div>
            </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</section>