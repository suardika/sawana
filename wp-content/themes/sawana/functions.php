<?php

// set up

// includes
include ( get_template_directory() . '/includes/front/enqueue.php' );

// Action & filter Hooks
add_action( 'wp_enqueue_scripts', 'sw_enqueue' );

// Shortcode
