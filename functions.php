<?php
add_action( 'wp_enqueue_scripts', function() {

    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,regular,500,700' );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css' );
	

    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js');
	wp_enqueue_script( 'jquery' );

	
	wp_enqueue_script( 'swiper', get_template_directory_uri() .'/assets/js/swiper.js', array('jquery'), 'null', true );

});

add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');


