<?php 

function sw_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'header_bg_color', array(
		'default'				=>	'#428f4',
		'transport'				=>	'refresh',
	));

	$wp_customize->add_section( 'sw_color_theme_section', array(
		'title'					=>	__( 'color', 'sawana' ),
		'priority'				=>	30
	));

	$wp_customize->add_control( new WP_customize_color_control($wp_customize, 'theme_colors', array(
		'label'					=>	__( 'Header Color', 'sawana'),
		'section'				=>	'sw_color_theme_section',
		'settings'				=>	'header_bg_color',
	)));
}