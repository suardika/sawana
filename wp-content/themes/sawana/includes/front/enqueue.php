<?php

function sw_enqueue() {
	wp_register_style( 'sw_roboto', 'https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,700italic,900,900italic');
	wp_register_style( 'sw_opensans', 'https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,400italic,600italic,700,700italic,800,800italic');
	wp_register_style( 'sw_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
	wp_register_style( 'sw_revsetting', get_template_directory_uri() . '/assets/revolution/css/settings.css');
	wp_register_style( 'sw_revlayer', get_template_directory_uri() . '/assets/revolution/css/layers.css');
	wp_register_style( 'sw_revnav', get_template_directory_uri() . '/assets/revolution/css/navigation.css');
	wp_register_style( 'sw_fontowesame', get_template_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css');
	wp_register_style( 'sw_plugin', get_template_directory_uri() . '/assets/css/plugins.css');
	wp_register_style( 'sawanatheme-style', get_stylesheet_uri() );
	wp_register_style( 'sw_custom', get_template_directory_uri() . '/assets/css/custom.css');

	wp_enqueue_style( 'sw_roboto');
	wp_enqueue_style( 'sw_opensans');
	wp_enqueue_style( 'sw_bootstrap');
	wp_enqueue_style( 'sw_revsetting');
	wp_enqueue_style( 'sw_revlayer');
	wp_enqueue_style( 'sw_revnav');
	wp_enqueue_style( 'sw_fontowesame');
	wp_enqueue_style( 'sw_plugin');
	wp_enqueue_style( 'sawanatheme-style');
	wp_enqueue_style( 'sw_custom');

	echo '<!--[if lt IE 9]>'. "\n";
	echo '<script src="' . esc_url( get_template_directory_uri() . '/assets/js/html5shiv.min.js' ) . '"></script>'. "\n";
	echo '<script src="' . esc_url( get_template_directory_uri() . '/assets/js/respond.min.js' ) . '"></script>'. "\n";
	echo '<![endif]-->'. "\n";

	wp_register_script ( 'sw_bootstrap_js', get_template_directory_uri( ) . '/assets/js/bootstrap.min.js', array(), false, true );
	wp_register_script ( 'sw_jquery_themepunch_tools_js', get_template_directory_uri( ) . '/assets/revolution/js/jquery.themepunch.tools.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_jquery_themepunch_revolution_js', get_template_directory_uri( ) . '/assets/revolution/js/jquery.themepunch.revolution.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_plugins_js', get_template_directory_uri( ) . '/assets/js/plugins.js', array(), false, true );
	wp_register_script ( 'sw_custom_js', get_template_directory_uri( ) . '/assets/js/custom.js', array(), false, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'sw_bootstrap_js' );
	wp_enqueue_script( 'sw_jquery_themepunch_tools_js' );
	wp_enqueue_script( 'sw_jquery_themepunch_revolution_js' );
	wp_enqueue_script( 'sw_plugins_js' );
	wp_enqueue_script( 'sw_custom_js' );

	wp_register_script ( 'sw_revolution_extension_actions_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.actions.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_carousel_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.carousel.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_kenburn_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.kenburn.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_layeranimation_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_migration_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.migration.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_navigation_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.navigation.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_parallax_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.parallax.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_slideanims_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.slideanims.min.js', array('jquery'), false, true );
	wp_register_script ( 'sw_revolution_extension_video_min_js', get_template_directory_uri( ) . '/assets/revolution/js/extensions/revolution.extension.video.min.js', array('jquery'), false, true );

	wp_enqueue_script ( 'sw_revolution_extension_actions_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_carousel_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_kenburn_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_layeranimation_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_migration_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_navigation_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_parallax_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_slideanims_min_js' );
	wp_enqueue_script ( 'sw_revolution_extension_video_min_js' );

}




