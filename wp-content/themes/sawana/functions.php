<?php

// set up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


// includes
include ( get_template_directory() . '/includes/front/enqueue.php' );
include ( get_template_directory() . '/includes/setup.php' );
require_once( get_template_directory() . '/includes/yamm-nav-walker.php' );
require_once( get_template_directory() . '/includes/wp-bs-pagination.php' );
include ( get_template_directory() . '/includes/widgets.php' );

// Action & filter Hooks
add_filter( 'show_admin_bar', '__return_false' );
add_action( 'wp_enqueue_scripts', 'sw_enqueue' );
add_action( 'after_setup_theme', 'sw_setup_theme' ); 
add_action( 'widgets_init', 'sw_widgets' );

// Shortcode
