<?php

function r_activate_plugin() {
	if ( version_compare( get_bloginfo('version'), '4.2', '<' )) {
		wp_die( __('You must update Wordpress to use this plugin.', 'recipe' ) );
	}

	global $wpdb;
	$charset_collate = $wpdb->get_charset_collate();
	$table_name = $wpdb->prefix . 'recipe_ratings';
	$createSQL	=	"	
			CREATE TABLE IF NOT EXISTS $table_name (
				`id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
				`recipe_id` bigint(20) UNSIGNED NOT NULL,
				`rating` float(3,1) UNSIGNED NOT NULL,
				`user_ip` varchar(32) NOT NULL,
				PRIMARY KEY (id)
			) ENGINE=InnoDB " . $charset_collate . " AUTO_INCREMENT=1;
	";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $createSQL );

	wp_schedule_event( time(), 'daily', 'r_daily_recipe_hook' );

}

