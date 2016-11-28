<?php 

function sw_admin_menus() {
	add_menu_page (
		'Sawana Theme Options',
		'Theme Option',
		'edit_theme_options',
		'sw_theme_opts',
		'sw_theme_opts_page'
	);
}