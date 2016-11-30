<?php 
/**
 *  Plugin Name: Recipe
 *	Description: A Simple Wordpress plugin that allows users to create recipes and rate those recipes
 *	Version: 1.0
 *	Author: suardika
 *	Author URI: http://sawana.com
 *	Text Domain: recipe
 */

if( !function_exists( 'add_action' ) ) {
	echo 'Not allowed';
	exit();
}

//	Setup
define( 'RECIPE_PLUGIN_URL', __FILE__ );

//	Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/admin/init.php' );

//	Hooks
register_activation_hook( __FILE__, 'r_activate_plugin'  );
add_action( 'init', 'recipe_init' );
add_action( 'admin_init', 'recipe_admin_init' );
add_action( 'save_post_recipe', 'r_save_post_admin', 10, 3 );
//	Shortcodes

