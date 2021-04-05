<?php

/* Register Header Menus */
function register_header_menu() {
register_nav_menu('header-menu',__( 'Header Menu' ));
    register_nav_menu('sidebar-menu',__( 'Sidebar Menu' ));
}
add_action( 'init', 'register_header_menu' );

/* Register Footer Menus */
function register_footer_menu() {
    register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

// Register CSS and JS
function theme_scripts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swa');
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/style.css' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/assets/js/menu.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/* Theme Custom Logo */
function themename_custom_logo_setup() {
    $defaults = array(
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'unlink-homepage-logo' => true,
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );


// Post Thumbnails
add_theme_support( 'post-thumbnails' );