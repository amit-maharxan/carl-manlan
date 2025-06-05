<?php get_header(); ?>

<section class="kl-main">
    <div class="container">
        <div class="row kl-top-header">
            <div class="col-md-7">
                <h1>The First Mile Project</h1>
                <p>By Carl Manlan</p>
            </div>
            <div class="col-md-5">
                <div class="kl-img-wrapper">
                    <figure class="kl-rounded-img">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/img/portrait-new.jpg" alt="Carl Manlan">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid kl-main--body">
        <div class="row">
            <div class="col-md-7">
                <figure class="kl-rounded-img">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/img-1.png" alt="">
                </figure>
            </div>
            <div class="col-md-5 d-flex align-items-center">
                <div>
                    <p>
                        <b>The First Mile Project</b> is an idea born out of the need to <b>connect</b> to the source. In Africa,
                        the majority of Africans live in rural areas thus our contribution to Africa’s transformation
                        is undeniably <b>from the source.</b>
                    </p>
                    <p>
                        The Africa we Have is predominantly rural and we have to continue to think about how every step we
                        take ensures that <b>the first mile</b> is permanently the centre of our actions and engagements.
                    </p>
                    <p>
                        In the Africa We Have, The First Mile Project starts with <b>a collection of ideas for impact.</b> It is my
                        way to weave ideas into the transformation agenda of citizen across Africa and the diaspora.
                    </p>
                    <p>
                        As we move forward, let us do so with the end in mind : <b> Human progress.</b>
                    </p>
                    <p>
                        <b>Through the ideas on these pages, I am inviting you to take your first mile for incremental
                            change in your community. </b>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- top header -->
<!--<section class="top-header style-seven pad-top-150 pad-bottom-150 pad-top-150 bg-pattern-2 mt-0 mb100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-xl-8 offset-xl-2 text-center">
                <h1 class="has-animation" data-delay="10">Hi, I'm Carl Manlan</h1>
                <p class="has-animation typo_1" data-delay="20">Here are all the articles I could write</p>
            </div>
        </div>
    </div>
    <div class="logo-profile">
        <img src="<?php /*bloginfo('template_directory'); */?>/assets/img/portrait.jpg" alt="Carl Manlan">
    </div>
</section>-->

<!-- top header -->
<!--<section class="blog-post style-two pad-75">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <?php /*$all_posts = new WP_Query(array('post_type' => 'POST', 'orderby' => 'date', 'posts_per_page' => '10')); */?>
                <?php /*while ($all_posts->have_posts()) : $all_posts->the_post(); */?>

                    <?php /*get_template_part('partials/min_post'); */?>

                <?php /*endwhile; */?>

                <div class="goback text-center col-12">
                    <div class="button-4">
                        <div class="eff-4"></div>
                        <a href="<?php /*the_permalink(7); */?>">See all articles</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>-->

<?php get_footer(); ?>