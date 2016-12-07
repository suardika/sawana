<?php 

function recipe_admin_init() {
	include( 'create-metaboxes.php' );
	include( 'recipe-options.php' );
	include( 'enqueue.php' );

	add_action( 'add_meta_boxes_recipe', 'r_create_metaboxes' );
	add_action( 'admin_enqueue_scripts', 'r_admin_enqueue' );
	add_filter( 'manage_edit-recipe_columns', 'add_new_recipe_column' );


}