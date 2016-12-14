<?php 

function sw_add_dashboard_widgets() {
	wp_add_dashboard_widget(
		'sw_latest_recipe_rating_widget',
		'Latest Recipe Ratings',
		'sw_latest_recipe_rating_display'
	);
}

function sw_latest_recipe_rating_display() {
	global $wpdb;

	$latest_ratings 	=	$wpdb->get_results(
		"SELECT * FROM `" . $wpdb->prefix . "recipe_ratings` ORDER BY `id` DESC LIMIT 5"
	);

	echo "<ul>";

	foreach ($latest_ratings as $rating) {
		$title			=	get_the_title( $rating->recipe_id );
		$permalink		=	get_the_permalink( $rating->recipe_id );

		?>
		<li>
			<a href="<?php echo $permalink; ?>"><?php echo $title; ?></a>
			received a rating of <?php echo $rating->rating; ?>
		</li>
		<?php

	}

	echo "</ul>";
}