<?php

add_action('wp_ajax_nopriv_filter_blueprints', 'filter_blueprints');
add_action('wp_ajax_filter_blueprints', 'filter_blueprints');

function filter_blueprints()
{
    $out = '';
    $blueprint_id    = (isset($_POST['blueprint_id'])) ? $_POST['blueprint_id'] : 0;

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 9,
    );

    if ($blueprint_id !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $blueprint_id,
            ),
        );
    }

    $wp_query = new WP_Query($args);

    while ($wp_query->have_posts()) : $wp_query->the_post();
        $out .= '<a href="'.get_permalink().'" class="contents"><article class="blogCard flex flex-col gap-4 md:max-w-[33vw]">
                <div class="imgWrapper aspect-[3/2] rounded-md">
                    <img src="' . get_the_post_thumbnail_url() . '" class="aspect-[3/2] rounded-md" alt="" />
                </div>
                <div class="btn-tag">';
        $terms = get_the_terms(get_the_ID(), 'category');
        $out .= $terms[0]->name;
        $out .= '</div>
                <h1 class="text-light font-medium text-xl uppercase">'. get_the_title() .'</h1>
                <p class="text-light font-poppins text-sm">';
        $content = get_the_content();
        $out .= wp_trim_words($content, 50);
        $out .= '</p>
            </article></a>';

    endwhile;
    wp_reset_query();

    echo $out;
    die();
}



add_action('wp_ajax_nopriv_filter_blueprints_2', 'filter_blueprints_2');
add_action('wp_ajax_filter_blueprints_2', 'filter_blueprints_2');

function filter_blueprints_2()
{
    $out = '';
    $blueprint_id    = (isset($_POST['blueprint_id'])) ? $_POST['blueprint_id'] : 0;

    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => -1,
    );

    if ($blueprint_id !== 'all') {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'category',
                'field'    => 'id',
                'terms'    => $blueprint_id,
            ),
        );
    }

    $wp_query = new WP_Query($args);

    while ($wp_query->have_posts()) : $wp_query->the_post();
        $out .= '<a href="'.get_permalink().'" class="contents"><article class="blogCard flex flex-col gap-4 md:max-w-[33vw]">
                <div class="imgWrapper aspect-[3/2] rounded-md">
                    <img src="' . get_the_post_thumbnail_url() . '" class="aspect-[3/2] rounded-md" alt="" />
                </div>
                <div class="btn-tag">';
        $terms = get_the_terms(get_the_ID(), 'category');
        $out .= $terms[0]->name;
        $out .= '</div>
                <h1 class="text-light font-medium text-xl uppercase">'. get_the_title() .'</h1>
                <p class="text-light font-poppins text-sm">';
        $content = get_the_content();
        $out .= wp_trim_words($content, 50);
        $out .= '</p>
            </article></a>';

    endwhile;
    wp_reset_query();

    echo $out;
    die();
}