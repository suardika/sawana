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
	wp_register_style( 'sw_style', get_template_directory_uri() . '/assets/css/style.css');
	wp_register_style( 'sw_custom', get_template_directory_uri() . '/assets/css/custom.css');

	wp_enqueue_style( 'sw_roboto');
	wp_enqueue_style( 'sw_opensans');
	wp_enqueue_style( 'sw_bootstrap');
	wp_enqueue_style( 'sw_revsetting');
	wp_enqueue_style( 'sw_revlayer');
	wp_enqueue_style( 'sw_revnav');
	wp_enqueue_style( 'sw_fontowesame');
	wp_enqueue_style( 'sw_plugin');
	wp_enqueue_style( 'sw_style');
	wp_enqueue_style( 'sw_custom');

  	?>
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  	<?php 

	wp_register_script ( 'sw_bootstrap_js', get_template_directory_uri( ) . '/assets/js/bootstrap.min.js', array('jquery'),'', true );
	wp_register_script ( 'sw_jquery.themepunch.tools_js', get_template_directory_uri( ) . '/assets/revolution/js/jquery.themepunch.tools.min.js', array('jquery'),'', true );
	wp_register_script ( 'sw_jquery.themepunch.revolution_js', get_template_directory_uri( ) . 'revolution/js/jquery.themepunch.revolution.min.js', array('jquery'),'', true );
	wp_register_script ( 'sw_plugins_js', get_template_directory_uri( ) . '/assets/js/plugins.js', array('jquery'),'', true );
	wp_register_script ( 'sw_custom_js', get_template_directory_uri( ) . '/assets/js/custom.js', array('jquery'),'', true );

	wp_enqueue_script( 'sw_bootstrap_js' );
	wp_enqueue_script( 'sw_jquery.themepunch.tools_js' );
	wp_enqueue_script( 'sw_jquery.themepunch.revolution_js' );
	wp_enqueue_script( 'sw_plugins_js' );
	wp_enqueue_script( 'sw_custom_js' );
}
