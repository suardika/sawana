<?php

function sw_admin_enqueue() {
	if(!isset($_GET['page']) || $_GET['page'] != "sw_theme_opts") {
		return;
	}
	wp_register_style( 'sw_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_enqueue_style( 'sw_bootstrap' );

	wp_register_script( 'sw_options', get_template_directory_uri() . '/assets/js/options.js', array(), false, true );
	wp_enqueue_media();
	wp_enqueue_script( 'sw_options' );
}