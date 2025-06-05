<article class="has-animation" data-delay="0">

    <?php if (has_post_thumbnail()) : ?>

        <div class="entry-media">

            <?php the_post_thumbnail('large', array('class'=>'img-fluid')); ?>

        </div>

    <?php endif; ?>

    <div class="entry-meta-content">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <span class="entry-meta">
            <?php
            $date   = get_the_date('Y-m-d');
            $date_d = date("F jS, Y", strtotime($date));
            ?>
            Originally published on <?php the_field('organization_post'); ?>, <?php echo $date_d; ?>
        </span>
    </div>

    <div class="entry-content-bottom">
        <div class="entry-content">
            <?php the_excerpt(); ?>
        </div>
        <div class="moremore">
            <a href="<?php the_permalink(); ?>" class="entry-read-more">
                <span></span> Read More
            </a>
        </div>
    </div>
</article>