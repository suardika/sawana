<?php

function sw_widgets() {
	register_sidebar (array(
		'name'				=> __( 'My First Theme Sidebar', 'sawana' ),
		'id'				=> 'sw_sidebar',
		'description'		=> __( 'Sidebar for the theme sawana', 'sawana' ),
		'class'				=> '',
		'before_widget' 	=> '<div id="%1$s" class="sidebar %2$s">',
		'after_widget'  	=> '</div>',
		'before_title'  	=> '<h4>',
		'after_title'   	=> '</h4>',

	));
}
