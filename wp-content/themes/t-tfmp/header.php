<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Cabe - Minimal and Clean Personal Blog Template">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_directory'); ?>/assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php bloginfo('template_directory'); ?>/assets/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php bloginfo('template_directory'); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/074b94f40e.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/main.css" type="text/css" media="all">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/livenexx.css" type="text/css" media="all">

    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/owl.theme.default.min.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-174286043-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-174286043-1');
    </script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- menu title -->
<section class="menu-title">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xl-3 text-center">
                <a href="<?php bloginfo('url'); ?>/" class="logo">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/logo.png" alt="" class="img-fluid">
                </a>
                <a href="#" class="menu-click">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div>
            <div class="col-lg-6 col-xl-6">
                <nav id="main-menu" class="text-center">
                    <ul>
                        <li class="<?php if(is_home()){echo 'active';} ?>">
                            <a href="<?php bloginfo('url'); ?>/">
                                Home
                            </a>
                        </li>
                        <li class="<?php if(is_page(7)){echo 'active';} ?>">
                            <a href="<?php the_permalink(7); ?>">
                                Ideas for action
                            </a>
                        </li>
                        <li class="<?php if(is_page(5)){echo 'active';} ?>">
                            <a href="<?php the_permalink(5); ?>">
                                About
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-sm-3 col-lg-3 text-center col-xl-3">
                <ul class="soical-icon-font list-inline">
                    <?php if(get_field('linkedin_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('linkedin_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('facebook_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('facebook_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('twitter_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('twitter_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('instagram_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('instagram_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-instagram"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('email_social', 'options')): ?>
                        <li class="list-inline-item">
                            <a href="<?php the_field('email_social', 'options'); ?>" target="_blank">
                                <i class="fa fa-envelope"></i>
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- menu title -->