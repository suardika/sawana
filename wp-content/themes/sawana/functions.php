<?php

// set up
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );
add_theme_support( 'post-formats', array( 'link', 'quote', 'video' ));

// includes
include ( get_template_directory() . '/includes/front/enqueue.php' );
include ( get_template_directory() . '/includes/setup.php' );
require_once( get_template_directory() . '/includes/yamm-nav-walker.php' );
require_once( get_template_directory() . '/includes/wp-bs-pagination.php' );
include ( get_template_directory() . '/includes/widgets.php' );
include ( get_template_directory() . '/includes/activate.php' );
include ( get_template_directory() . '/includes/admin/menus.php' );
include ( get_template_directory() . '/includes/admin/options-page.php' );
include ( get_template_directory() . '/includes/admin/init.php' );
include ( get_template_directory() . '/process/save-options.php' );
include ( get_template_directory() . '/includes/shortcodes/facebook.php' );
include ( get_template_directory() . '/includes/theme-customizer.php' );
include ( get_template_directory() . '/includes/front/head.php' );

// Action & filter Hooks 
add_filter( 'show_admin_bar', '__return_false' );
add_action( 'wp_enqueue_scripts', 'sw_enqueue' );
add_action( 'after_setup_theme', 'sw_setup_theme' );
add_action( 'widgets_init', 'sw_widgets' );
add_action( 'after_switch_theme', 'sw_activate' );
add_action( 'admin_menu', 'sw_admin_menus' );
add_action( 'admin_init', 'sw_admin_init' );
add_action( 'customize_register', 'sw_customize_register' );
add_action( 'wp_head', 'sw_head' );


// Shortcode

add_shortcode( 'sfb', 'sw_facebook_shortcode' );
add_shortcode( 'ui', 'sw_icon_shortcode' );
