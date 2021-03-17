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
                            <li class="facebook"><a href="https://www.facebook.com/profile.php?id=100024404018785" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="twitter"><a href="https://twitter.com/home?lang=ru" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li class="google-plus"><a href="https://ru.wikipedia.org/wiki/Google%2B" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                            <li class="instagram"><a href="https://www.instagram.com/voitsekhovskayamarina/?hl=ru" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li class="searsh"><a href="https://www.google.com/search?q=google-plus&oq=google-plus&aqs=chrome..69i57j0i30l9.2739j0j7&sourceid=chrome&ie=UTF-8" target="_blank"><i class="fas fa-search"></i></a></li>
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
                            <li><a href="tel:+380686073687"><b>Call US: +38(068)6073687</b></a></li>
                            <li><a href="mailto:voicehovskyy@gmail.com">E-mail: voicehovskyy@gmail.com</a></li>
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
                            <li>Mon-Sat(8:00am-12:00am)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="">
        <div class="container nav-shadow">
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