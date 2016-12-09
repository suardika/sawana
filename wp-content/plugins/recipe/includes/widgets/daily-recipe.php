<?php 

class R_Daily_Recipe_Widget extends WP_Widget {

	/**
	 * Sets up the widgets name etc
	 */
	public function __construct() {
		parent::__construct( 'r_daily_recipe_widget', 'Recipe of the Day', array(
			'description'	=>	'Displays a random recipe each day'
		));
	}

	/**
	 * Outputs the content of the widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {
		// outputs the content of the widget
		echo 'Recipe of the day';
	}

	/**
	 * Outputs the options form on admin
	 *
	 * @param array $instance The widget options
	 */
	public function form( $instance ) {
		// outputs the options form on admin
		$default		=	array( 'title'	=>	'Recipe of the day' );
		$instance 		=	wp_parse_args( (array) $instance, $default );

		?>

		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
			<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" 
				   name="<?php echo $this->get_field_name( 'title' ); ?>"
				   value="<?php echo esc_attr( $instance['title'] ); ?>">
		</p>

		<?php 

	}

	/**
	 * Processing widget options on save
	 *
	 * @param array $new_instance The new options
	 * @param array $old_instance The previous options
	 */
	public function update( $new_instance, $old_instance ) {
		// processes widget options to be saved
		$instance 				=	array();
		$instance['title']		=	strip_tags( $new_instance['title'] );
		return $instance;
	}

}