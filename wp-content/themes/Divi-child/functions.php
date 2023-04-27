<?php
function my_theme_enqueue_styles() { 
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'home-style', get_stylesheet_directory_uri() . '/css/home.css' );
    wp_enqueue_style( 'about-style', get_stylesheet_directory_uri() . '/css/about.css' );
    wp_enqueue_style( '404-style', get_stylesheet_directory_uri() . '/css/404.css' );
    wp_enqueue_style( 'faq-style', get_stylesheet_directory_uri() . '/css/faq.css' );
    wp_enqueue_style( 'contact-style', get_stylesheet_directory_uri() . '/css/contact.css' );
}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
	

