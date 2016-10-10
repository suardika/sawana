<?php
/*
Plugin Name: JW Filter
Plugin URI: net.tutsplus.com
Description: Just for demo purposes.
Author: Jeffrey Way
Author URI: http://net.tutsplus.com
version: 1.0
*/

// add_filter('the_title', 'jw_modify_title_cb' );

// add_filter('the_title', function($content){

// });


// add_filter('the_title', ucwords);


/*add_filter('the_content', function($content){
	return $content . ' ' . time();
});*/


/*add_action('wp_footer', function(){
	echo "Hello from the footer!";
});*/


// add_action('comment_post', function(){
// 	$email = get_bloginfo('admin_email');
// 	wp_mail(
// 		$email,
// 		'New Comment Posted',
// 		'A new comment has been left on your blog'
// 	);
// });


add_filter('the_content', function($content){
	$id = get_the_id();
	if (!is_singular('post')) {
		return $content;
	}

	$terms = get_the_terms($id, 'category');
	// print_r($terms);
	$cats = array();

	foreach ($terms as $term) {
		$cats[] = $term->term_taxonomy_id;
	}

	$loop = new WP_Query(
		array(
			'posts_per_page' => 3,
			'category__in' => $cats,
			'orderby' => 'rand',
			'post__not_in' => array($id)

		)
	);

	if ($loop -> have_posts()) {
		$content .= '
			<h2>You Also Might Like...</h2>
			<ul> <class="related-category-posts">';
		while ($loop->have_posts()) {
			$loop->the_post();
			$content .= '
			<li>
				<a href="' . get_permalink() . '">' . get_the_title() . '</a>
			</li>';
		}
		$content .= '</ul>';
		wp_reset_query();
	}

	return $content;

});

