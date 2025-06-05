<?php get_header(); ?>

    <section class="single-post pad-50 pad-top-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="entry-header text-center">
                        <h1 class="entry-title">
                            <?php the_title(); ?>
                        </h1>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-2">
                    <div class="entry-content">
                        <?php while (have_posts()) : the_post(); ?>
                            <?php the_content(); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>