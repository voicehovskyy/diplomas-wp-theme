<?php

// функции поддержки в теме
add_theme_support( 'custom-logo');
add_theme_support( 'menus');
add_theme_support( 'post-thumbnails');
// Регистрация меню

register_nav_menu('header-menu', 'Header Menu' );
register_nav_menu('footer-menu', 'Footer Menu' );

// Стили
add_action('wp_enqueue_scripts', 'freshmeal_styles');
function freshmeal_styles(){
	wp_enqueue_style('bootstrap',   "https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css");
	wp_enqueue_style('fontawesome',  "https://pro.fontawesome.com/releases/v5.10.0/css/all.css");
	wp_enqueue_style('fonts',  get_template_directory_uri() . "/css/fonts.css");
	wp_enqueue_style('main',  get_template_directory_uri() . "/css/main.css");
	wp_enqueue_style('style',  get_stylesheet_uri());
}

// Скрипты
add_action('wp_enqueue_scripts', 'freshmeal_scripts');
function freshmeal_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery',  'https://code.jquery.com/jquery-3.6.0.min.js', false, '3.6.0', true );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'slick',  get_template_directory_uri() . '/js/slick.min.js', array('jquery'), '1.0', true );
	wp_enqueue_script( 'bootstrap',  'https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.0.0', true );
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0', true );
}
