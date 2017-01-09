<?php

add_action( 'wp_enqueue_scripts', function(){
	wp_register_style( 'parent-style', get_template_directory_uri() . '/style.css');
	wp_register_style( 'child-style', get_stylesheet_uri() );

	wp_enqueue_style( 'parent-style' );
	wp_enqueue_style( 'child-style' );	
});


// woocommerce
function sawana_woocommerce_scripts() {
  wp_enqueue_style( 'custom-woocommerce-style', get_stylesheet_directory_uri() . '/custom-woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'sawana_woocommerce_scripts' );

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}

