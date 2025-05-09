<section class="">
<div class="relative w-full">
    <div  class="hexBg pattern1 bgEffect absolute inset-0 z-0 after:z-0 after:block after:inset-0 after:absolute after:bg-linear-to-b after:from-dark after:via-dark/40 after:via-10% after:to-dark/40" data-gradX="0.9" data-gradY="0.5" data-gradSize="farthest-corner" data-box-dimension="180"></div>
    <div class="container z-1 relative">
        <div class="grid py-20 md:grid-cols-2 text-light font-medium">
            <h2
            class="text-3xl/relaxed uppercase px-12"
            data-scrub-by=".char">
            <?php echo get_field('change_description_left');?>
            </h2>
            <p class="font-poppins font-bold px-12" data-scrub-by=".word">
                <?php echo get_field('change_description_right');?>
            </p>
        </div>

        <div class="btnGroup flex gap-4 flex-wrap w-full justify-center py-10 text-light uppercase font-medium">
            <button class="btn-filter" data-active data-id="all">All</button>
            <?php
                $terms = get_terms([
                    'taxonomy'   => 'category',
                    'hide_empty' => false, // Set to true if you only want terms that are actually used
                    'object_ids' => get_posts([
                        'post_type'      => 'blueprints',
                        'posts_per_page' => -1,
                        'fields'         => 'ids',
                    ]),
                ]);

                if (!empty($terms) && !is_wp_error($terms)) {
                    foreach ($terms as $term) {
                        $slug = $_GET['filter'] ?? '';
                        echo '<button class="btn-filter '.$slug.'" data-id="'. esc_html($term->slug) .'">' . esc_html($term->name) . '</button>';
                    }
                }
            ?>
        </div>
    </div>
</div>
<div class="container blogGrid bg-dark" style="--grid-gap: 2.5rem" id="blueprint_blogGrid">
    <?php
        $wp_query = new WP_Query(array(
            'post_type'      => 'blueprints', // Fetch regular WordPress posts
            'posts_per_page' => 9, // Number of posts to display
        ));
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
        <article class="blogCard flex flex-col gap-10">
            <div class="imgWrapper aspect-[3/2] rounded-md">
                <img
                src="<?php echo get_the_post_thumbnail_url();?>"
                class="aspect-[3/2] rounded-md"
                alt="" />
            </div>
            <div class="btn-tag !rounded-md border border-primary text-light font-medium">
                <?php $terms = get_the_terms(get_the_ID(), 'category');
                echo $terms[0]->name; ?>
            </div>
            <h1 class="text-light font-medium text-xl uppercase"><?php the_title();?></h1>
            <p class="text-light font-poppins text-sm">
            <?php $content = get_the_content(); 
                echo wp_trim_words( $content, 200 );?>
            </p>
        </article>
    <?php endwhile; wp_reset_query(); ?>
</div>
<div class="loader_icon" id="loader_icon">
        <img src="<?php echo site_url('wp-content/uploads/2025/05/loader.gif');?>" alt="" width="200" height="200" class="mx-auto my-20" />
</div>
<div
    class="container relative subscribe blogGrid bg-dark my-20"
    style="--grid-gap: 2.5rem">
    <div
    class="bgGrad absolute inset-0 bg-linear-to-b from-dark/30 via-dark/80 to-dark"></div>

    <?php
        $wp_query = new WP_Query(array(
            'post_type'      => 'blueprints', // Fetch regular WordPress posts
            'posts_per_page' => -1, // Number of posts to display
        ));
        while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

        <article class="blogCard flex flex-col gap-10">
            <div class="imgWrapper aspect-[3/2] rounded-md">
                <img
                src="<?php echo get_the_post_thumbnail_url();?>"
                class="aspect-[3/2] rounded-md"
                alt="" />
            </div>
            <div class="btn-tag !rounded-md border border-primary text-light font-medium">
                <?php $terms = get_the_terms(get_the_ID(), 'category');
                echo $terms[0]->name; ?>
            </div>
            <h1 class="text-light font-medium text-xl uppercase"><?php the_title();?></h1>
            <p class="text-light font-poppins text-sm">
                <?php $content = get_the_content(); 
                echo wp_trim_words( $content, 200 );?>
            </p>
        </article>

    <?php endwhile; wp_reset_query(); ?>

    <div
    class="absolute inset-0 text-light font-medium uppercase text-center">
    <div
        class="bgGrad absolute inset-0 bg-linear-to-b from-dark/30 via-dark/80 to-dark"></div>
    <div
        class="txtWrapper z-1 absolute inset-x-0 inset-y-[60%] grid place-content-center gap-10">
        <p
        class="text-3xl"
        data-by=".line">
        Access Carl's full library of Blueprints by subscribing below.
        Join a growing community dedicated to creating meaningful change
        - one idea at a time.
        </p>
        <button class="btn-primary mx-auto">
        Subscribe for full access
        </button>
    </div>
    </div>
</div>
</section>

<script>

    document.addEventListener('DOMContentLoaded', function () {
        const filterButtons = document.querySelectorAll('.btn-filter');

        filterButtons.forEach(button => {
            button.addEventListener('click', function () {
                // Remove data-active from all buttons
                filterButtons.forEach(btn => btn.removeAttribute('data-active'));

                // Add data-active to the clicked button
                this.setAttribute('data-active', '');
            });
        });
    });
    
    $(document).ready(function(){
        
        $('#loader_icon').hide();
    });

    $('.btn-filter').click(function(e){
        e.preventDefault();
        
        $('#loader_icon').show();
        var blueprint_id    = $(this).attr('data-id');
        var str             = '&blueprint_id=' + blueprint_id + '&action=filter_blueprints';
        $('#blueprint_blogGrid').html('');

        $.ajax({
            type: "POST",
            dataType: "html",
            url: "<?php echo admin_url( 'admin-ajax.php' );?>",
            data: str,
            success: function(data){
             
                $('#loader_icon').hide();
                $('#blueprint_blogGrid').html(data);
            },
            error : function(jqXHR, textStatus, errorThrown) {
                console.log('error');
            }
        });
    });
</script>