<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <!-- Start Header -->
    <header>
        <div class="black">
            <div class="container header-top">
                <div class="row">
                    <div class="col-6">
                        <ul class="social-icons icons">
                            <li class="facebook"><a href="<?php the_field('header-facebook', 'option'); ?>" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="<?php the_field('header-twitter', 'option'); ?>" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="<?php the_field('header-google', 'option'); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="instagram"><a href="<?php the_field('header-instagram', 'option'); ?>" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="searsh"><a href="<?php the_field('header-search', 'option'); ?>" target="_blank"><i class="fas fa-search"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="social-icons check">
                            <li><a href="<?php echo wp_login_url(); ?>"><i class="fas fa-user"></i><span> Log in </span></a></li>
                            <li class="wand"><a href="<?php echo wp_registration_url(); ?>"><i class="fas fa-edit"></i><span> Register Now </span></a></li>
                            <li class="wand"><a href="#"><i class="fas fa-shopping-cart"></i><span>0 items - ($0.00)</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="connection">
                        <i class="fas fa-phone-alt"></i>
                        <ul>
                            <li><a href="tel:<?php the_field('header-call', 'option'); ?>"><b>Call US: <?php the_field('header-call', 'option'); ?></b></a></li>
                            <li><a href="mailto:<?php the_field('header-email', 'option'); ?>">E-mail: <?php the_field('header-email', 'option'); ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <?php echo get_custom_logo(); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="hours">
                        <i class="far fa-clock"></i>
                        <ul>
                            <li><b>Working Hours:</b></li>
                            <li><?php the_field('header-working', 'option'); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="">
        <div class="container">
            <nav class="navbar-expand-md navbar-expand-lg navbar-light ">
                <button class="navbar-toggler mx-auto d-block  d-md-none d-lg-none mb-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu([
                    'theme_location'  => 'header-menu',
                    'menu'            => 'Header Menu',
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse center',
                    'container_id'    => 'navbarSupportedContent',
                    'menu_class'      => 'nav navbar-nav navbar-right',
                ]);
                ?>
            </nav>
        </div>
    </div>
    <!-- End Header -->


    <!-- Start main -->
    <main>