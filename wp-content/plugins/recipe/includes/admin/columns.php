<?php 

function add_new_recipe_column( $columns ) {
	$new_columns				=	array();
	$new_columns['cb']			=	'<input type="checkbox" />';
	$new_columns['title']		=	__( 'Title', 'recipe' );
	$new_columns['author']		=	__( 'Author', 'recipe' );
	$new_columns['categories']	=	__( 'Categories', 'recipe' );
	$new_columns['count']		=	__( 'Rating Count', 'recipe' );
	$new_columns['rating']		=	__( 'Average Rating', 'recipe' );
	$new_columns['date']		=	__( 'Date', 'recipe' );
}