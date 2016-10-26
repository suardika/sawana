<?php 

function sw_setup_theme() {
	register_nav_menu( 'primary', __('primary Menu', 'sawana') );
} 


if ( ! function_exists( 'sawana_post_nav' ) ) :
/**
 * Display navigation to next/previous post when applicable.
 *
 * @return void
 */
function sawana_post_nav() {
	// Don't print empty markup if there's nowhere to navigate.
	$previous = ( is_attachment() ) ? get_post( get_post()->post_parent ) : get_adjacent_post( false, '', true );
	$next     = get_adjacent_post( false, '', false );

	if ( ! $next && ! $previous ) {
		return;
	}
	?>
	<nav class="navigation post-navigation" role="navigation">		
		<div class="nav-links">
			<?php
				previous_post_link( '<div class="nav-previous btn btn-default">%link</div>', _x( '<i class="fa fa-chevron-left"></i> %title', 'Previous post link', 'sawana' ) );
				next_post_link(     '<div class="nav-next btn btn-default">%link</div>',     _x( '%title <i class="fa fa-chevron-right"></i>', 'Next post link',     'sawana' ) );
			?>
		</div><!-- .nav-links -->
	</nav><!-- .navigation -->
	<?php
}
endif;