<?php 

function sw_load_textdomain() {
	$plugin_dir				=	'recipe/lang';
	load_plugin_textdomain( 'recipe', false, $plugin_dir );
}