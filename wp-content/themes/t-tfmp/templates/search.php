<?php
/*
    Template Name: Search
*/
?>
<?php
    if(!isset($_GET['term_search'])){
        wp_redirect(get_bloginfo('url'));
    }
    else{
        $all_posts = new WP_Query(array('s' => $_GET['term_search'], 'post_type' => 'POST', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1'));
        $nb_result = $all_posts->post_count;
    }
?>
<?php get_header(); ?>
<section class="meta-title kl-blog-main-title">
    <div class="col-sm-12 text-center">
        <div class="page-title ">
            <h1 class="has-animation" data-delay="0">
                <?php if($nb_result == 0): ?>
                    <span>No result for : </span> <?php echo $_GET['term_search']; ?>
                <?php elseif($nb_result == 1): ?>
                    <span>1 result for : </span> <?php echo $_GET['term_search']; ?>
                <?php elseif($nb_result > 1): ?>
                    <span><?php echo $nb_result; ?> results for : </span> <?php echo $_GET['term_search']; ?>
                <?php endif; ?>
            </h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <form action="<?php the_permalink(2); ?>" class="kl-frm-search" method="get">
                    <div class="form-group">
                        <input type="text" name="term_search" placeholder="<?php echo $_GET['term_search']; ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="blog-post style-two mb75">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php $all_posts = new WP_Query(array('s' => $_GET['term_search'], 'post_type' => 'POST', 'orderby' => 'date', 'order' => 'DESC', 'posts_per_page' => '-1')); ?>
                <?php while ($all_posts->have_posts()) : $all_posts->the_post(); ?>

                    <?php get_template_part('partials/min_post'); ?>

                <?php endwhile; ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
