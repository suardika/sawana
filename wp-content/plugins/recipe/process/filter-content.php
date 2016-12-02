<?php

function r_filter_recipe_content($content) {
	if(!is_singular('recipe')){
		return $content;
	}
	global $post;
	$recipe_data		=	get_post_meta( $post->ID, 'recipe_data', true );
	$recipe_html		=	file_get_contents( 'recipe-template.php', true );
	$recipe_html		=	str_replace( "INGREDIENTS_PH", $recipe_data['ingredients'], $recipe_html );
	$recipe_html		=	str_replace( "COOKING TIME_PH", $recipe_data['time'], $recipe_html );
	$recipe_html		=	str_replace( "UTENSIL_PH", $recipe_data['utensils'], $recipe_html );
	$recipe_html		=	str_replace( "LEVEL_PH", $recipe_data['level'], $recipe_html );
	$recipe_html		=	str_replace( "TYPE_PH", $recipe_data['meal_type'], $recipe_html );

	$recipe_html		=	str_replace( "INGREDIENTS_I18N", __( 'Ingredients', 'recipe' ), $recipe_html );
	$recipe_html		=	str_replace( "COOKING TIME_I18N", __( 'Cooking Time', 'recipe' ), $recipe_html );
	$recipe_html		=	str_replace( "UTENSIL_I18N", __( 'Utensils Required', 'recipe' ), $recipe_html );
	$recipe_html		=	str_replace( "LEVEL_I18N", __( 'Level', 'recipe' ), $recipe_html );
	$recipe_html		=	str_replace( "TYPE_I18N", __( 'Type', 'recipe' ), $recipe_html );
	$recipe_html		=	str_replace( "RATE_I18N", __( 'Rating', 'recipe' ), $recipe_html );

	return $recipe_html . $content;
}