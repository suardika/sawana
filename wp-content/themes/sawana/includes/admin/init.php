<?php

function sw_admin_init() {
	include( 'enqueue.php' );

	add_action( 'admin_enqueue_scripts', 'sw_admin_enqueue' );
	add_action( 'admin_post_sw_save_options', 'sw_save_option' );

}