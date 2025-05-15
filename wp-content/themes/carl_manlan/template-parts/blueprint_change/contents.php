<section class="">
    <div class="relative w-full">
        <div class="hexBg pattern1 bgEffect absolute inset-0 z-0 after:z-0 after:block after:inset-0 after:absolute after:bg-linear-to-b after:from-dark after:via-dark/40 after:via-20% after:via-dark/40 after:via-80% after:to-dark" data-gradX="0.9" data-gradY="0.5" data-gradSize="farthest-corner" data-box-dimension="180"></div>
        <!-- <div class="absolute inset-0 z-0 after:z-0 after:block after:inset-0 after:absolute after:bg-linear-to-l after:from-dark after:via-dark/40 after:via-10% after:to-dark/40" data-gradX="0.9" data-gradY="0.5" data-gradSize="farthest-corner" data-box-dimension="180"></div> -->
        <div class="container z-1 relative">
            <div class="grid py-20 md:grid-cols-2 gap-x-24 gap-y-12 text-light font-medium">
                <h2
                    class="text-3xl/relaxed uppercase"
                    data-scrub-by=".word">
                    <?php echo get_field('change_description_left'); ?>
                </h2>
                <p class="font-poppins font-bold text-light/75" data-scrub-by=".word">
                    <?php echo get_field('change_description_right'); ?>
                </p>
            </div>

            <div class="btnGroup flex gap-4 flex-wrap w-full justify-center py-10 text-light uppercase font-medium">
                <?php $slug = $_GET['filter'] ?? 'data-active'; ?>
                <button class="btn-filter" <?php echo $slug; ?> data-id="all">All</button>
                <?php
                $terms = get_terms([
                    'taxonomy'   => 'blueprint-category',
                    'hide_empty' => false, // Set to true if you only want terms that are actually used
                    'object_ids' => get_posts([
                        'post_type'      => 'blueprints',
                        'posts_per_page' => -1,
                        'fields'         => 'ids',
                    ]),
                ]);

                if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        // var_dump($term);
                        $slug = $_GET['filter'] ?? '';
                        if ($slug == $term->term_id) {
                            $active = 'data-active';
                        } else {
                            $active = '';
                        }
                        echo '<button class="btn-filter ' . esc_html($term->term_id) . '"' . $active . ' data-id="' . esc_html($term->term_id) . '">' . esc_html($term->name) . '</button>';
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container blogGrid bg-dark mt-10" style="--grid-gap: 4rem" id="blueprint_blogGrid">
        <?php
        $wp_query = new WP_Query(array(
            'post_type'      => 'blueprints', // Fetch regular WordPress posts
            'posts_per_page' => 6, // Number of posts to display
        ));
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="contents">
                <article class="blogCard flex flex-col gap-4">
                    <div class="imgWrapper aspect-[3/2] rounded-md">
                        <img
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            class="aspect-[3/2] rounded-md"
                            alt="" />
                    </div>
                    <div class="btn-tag">
                        <?php $terms = get_the_terms(get_the_ID(), 'blueprint-category');
                        echo $terms[0]->name; ?>
                    </div>
                    <h1 class="text-light font-medium text-xl uppercase"><?php the_title(); ?></h1>
                    <p class="text-light font-poppins text-sm">
                        <?php $content = get_the_content();
                        echo wp_trim_words($content, 200); ?>
                    </p>
                </article>
            </a>
        <?php endwhile;
        wp_reset_query(); ?>
    </div>
    <div class="loader_icon" id="loader_icon">
        <div class="loader"></div>
        <!-- <img src="<?php echo site_url('wp-content/uploads/2025/05/loader.gif'); ?>" alt="" width="200" height="200" class="mx-auto my-20" /> -->
    </div>
    <div
        class="container relative subscribe blogGrid bg-dark my-20"
        style="--grid-gap: 2.5rem">
        <div
            class="bgGrad absolute inset-0 bg-linear-to-b from-dark/30 via-dark/80 to-dark"></div>

        <?php
        $wp_query = new WP_Query(array(
            'post_type'      => 'blueprints', // Fetch regular WordPress posts
            'posts_per_page' => 6, // Number of posts to display
        ));
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

            <article class="blogCard flex flex-col gap-4">
                <a href="<?php the_permalink(); ?>" class="contents">
                    <div class="imgWrapper aspect-[3/2] rounded-md">
                        <img
                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                            class="aspect-[3/2] rounded-md"
                            alt="" />
                    </div>
                    <div class="btn-tag">
                        <?php $terms = get_the_terms(get_the_ID(), 'blueprint-category');
                        echo $terms[0]->name; ?>
                    </div>
                    <h1 class="text-light font-medium text-xl uppercase"><?php the_title(); ?></h1>
                    <p class="text-light font-poppins text-sm">
                        <?php $content = get_the_content();
                        echo wp_trim_words($content, 200); ?>
                    </p>
                </a>
            </article>

        <?php endwhile;
        wp_reset_query(); ?>

        <div
            class="absolute inset-0 text-light font-medium uppercase text-center">
            <div
                class="bgGrad absolute inset-0 bg-linear-to-b from-dark/30 via-dark/60 to-dark"></div>
            <div
                class="txtWrapper z-1 absolute inset-x-0 inset-y-[80%] lg:inset-y-[60%] grid place-content-center gap-10">
                <p
                    class="text-3xl"
                    data-by=".line">
                    Access Carl's full library of Blueprints by subscribing below.
                    Join a growing community dedicated to creating meaningful change
                    - one idea at a time.
                </p>
                <button class="btn-primary mx-auto" popovertarget="myDialog">
                    Subscribe for full access
                </button>
            </div>
        </div>
    </div>
</section>

<!-- Dialog with popover -->
<dialog
    id="myDialog"
    popover
    class="rounded-lg w-full max-w-[min(600px,calc(100%_-_2rem))] shadow-xl m-auto border border-gray">
    <!-- Close button -->
    <!-- Dialog with popover -->


    <button
        popovertarget="myDialog"
        class="absolute top-4 right-2 text-primary text-xl z-1">
        <i data-feather="x"></i>
    </button>

    <!-- Dialog content -->
    <div class="klaviyo-form-SBjQQY"></div>
</dialog>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.btn-filter');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Remove data-active from all buttons
                filterButtons.forEach(btn => btn.removeAttribute('data-active'));

                // Add data-active to the clicked button
                this.setAttribute('data-active', '');
            });
        });
    });

    $(document).ready(function() {
        $('#loader_icon').hide();
        
        if ($('.klaviyo-form-SBjQQY').hasClass('form-version-cid-1')) {
            console.log('It has the class form-version-cid-1');
        } else {
            $('<h2>You have already subscribed. Please use the link you received in your email.</h2>').appendTo($form);
            console.log('It does not have the class form-version-cid-1');
        }
    });

    $('.btn-filter').click(function(e) {
        e.preventDefault();

        $('#loader_icon').show();
        var blueprint_id = $(this).attr('data-id');
        var str = '&blueprint_id=' + blueprint_id + '&action=filter_blueprints';
        $('#blueprint_blogGrid').html('');

        $.ajax({
            type: "POST",
            dataType: "html",
            url: "<?php echo admin_url('admin-ajax.php'); ?>",
            data: str,
            success: function(data) {

                $('#loader_icon').hide();
                $('#blueprint_blogGrid').html(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log('error');
            }
        });
    });

    var id = "<?php echo $slug; ?>";
    setTimeout(function() {
        $('.btn-filter.' + id).click();
    }, 2000);
</script>