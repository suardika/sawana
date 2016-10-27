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


if (!function_exists('bootstrapBasicComment')) {
	/**
	 * Displaying a comment
	 * 
	 * @param object $comment
	 * @param array $args
	 * @param integer $depth
	 * @return string the content already echo.
	 */
	function bootstrapBasicComment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment;

		if ('pingback' == $comment->comment_type || 'trackback' == $comment->comment_type) { 
			echo '<li id="comment-';
				comment_ID();
				echo '" ';
				comment_class('comment-type-pt');
			echo '>';
			echo '<div class="comment-body media">';
				echo '<div class="media-body">';
					_e('Pingback:', 'sawana');
					comment_author_link(); 
					edit_comment_link(__('Edit', 'sawana'), '<span class="edit-link">', '</span>');
				echo '</div>';
			echo '</div>';
		} else {
			echo '<li id="comment-';
				comment_ID();
				echo '" ';
				comment_class(empty($args['has_children']) ? '' : 'parent media');
			echo '>';

			echo '<article id="div-comment-';
				comment_ID();
			echo '" class="comment-body media">';

				// footer
				echo '<footer class="comment-meta pull-left">';
					if (0 != $args['avatar_size']) {
						echo get_avatar($comment, $args['avatar_size']);
					}
				echo '</footer><!-- .comment-meta -->';
				// end footer

				// comment content
				echo '<div class="comment-content media-body">';
					echo '<div class="comment-author vcard">';
						echo '<div class="comment-metadata">';

						// date-time
						echo '<a href="';
							echo esc_url(get_comment_link($comment->comment_ID));
						echo '">';
						echo '<time datetime="';
							comment_time('c');
						echo '">';
						printf(_x('%1$s at %2$s', '1: date, 2: time', 'sawana'), get_comment_date(), get_comment_time());
						echo '</time>';
						echo '</a>';
						// end date-time

						echo ' ';

						edit_comment_link('<span class="fa fa-pencil-square-o "></span>' . __('Edit', 'sawana'), '<span class="edit-link">', '</span>');

						echo '</div><!-- .comment-metadata -->';

						// if comment was not approved
						if ('0' == $comment->comment_approved) {
							echo '<div class="comment-awaiting-moderation text-warning"> <span class="glyphicon glyphicon-info-sign"></span> ';
								_e('Your comment is awaiting moderation.', 'sawana');
							echo '</div>';
						} //endif;

						// comment author says
						printf(__('%s <span class="says">says:</span>', 'sawana'), sprintf('<cite class="fn">%s</cite>', get_comment_author_link()));
					echo '</div><!-- .comment-author -->';

					// comment content body
					comment_text();
					// end comment content body

					// reply link
					comment_reply_link(array_merge($args, array(
						'add_below' => 'div-comment',
						'depth'     => $depth,
						'max_depth' => $args['max_depth'],
						'reply_text' => '<span class="fa fa-reply"></span> ' . __('Reply', 'sawana'),
						'login_text' => '<span class="fa fa-reply"></span> ' . __('Log in to Reply', 'sawana')
					)));
					// end reply link
				echo '</div><!-- .comment-content -->';
				// end comment content



			echo '</article><!-- .comment-body -->';
		} //endif;
	}// bootstrapBasicComment
}