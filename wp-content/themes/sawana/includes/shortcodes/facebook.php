<?php 

// function sw_facebook_shortcode() {
// 	return '<a href="https://www.facebook.com/worldbinaryexchange" class="btn bg-facebook">
// 				<i class="fa fa-facebook"></i> Like us on Facebook
// 			</a>';
// }



// function sw_facebook_shortcode( $atts, $content = 'Like us on Facebook' ) {
// 	$sw_theme_opts	=	get_option('sw_opts');
// 	$atts			=	shortcode_atts( array(
// 		'page'		=>	$sw_theme_opts['facebook']
// 	), $atts);

// 	return '<a href="https://www.facebook.com/' . $atts['page'] . '" class="btn bg-facebook">
// 				<i class="fa fa-facebook"></i> ' . $content . '
// 			</a>';
// }

// function sw_icon_shortcode($atts) {
// 	return '<i class="fa fa-' . $atts['icon'] . '"></i>';
// }


function sw_facebook_shortcode( $atts, $content = 'Like us on Facebook' ) {
	$sw_theme_opts	=	get_option('sw_opts');
	$atts			=	shortcode_atts( array(
		'page'		=>	$sw_theme_opts['facebook']
	), $atts);

	return '<a href="https://www.facebook.com/' . $atts['page'] . '" class="btn bg-facebook">
				' . do_shortcode($content) . '
			</a>';
}

function sw_icon_shortcode($atts) {
	return '<i class="fa fa-' . $atts['icon'] . '"></i>';
}