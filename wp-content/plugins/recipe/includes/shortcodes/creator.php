<?php 

function r_recipe_creator_shortcode() {
	// return 'hello darling';
	$creatorHTML	=	file_get_contents( 'creator-template.php', true );

	$creator_tpl_res	=	wp_remote_get( plugins_url( 'includes/shortcodes/creator-template.php', RECIPE_PLUGIN_URL ));
	$creatorHTML		=	wp_remote_retrieve_body( $creator_tpl_res );

	$editorHTML		=	r_generate_content_editor();
	$creatorHTML	=	str_replace('CONTENT_EDITOR', $editorHTML, $creatorHTML);
	return $creatorHTML;
}

function r_generate_content_editor() {
	ob_start();
	wp_editor( '' , 'recipecontenteditor');
	$editor_contents	=	ob_get_clean();
	return $editor_contents;
}

// add_filter( 'the_excerpt', 'r_recipe_creator_shortcode');
