<?php
error_reporting(E_ALL);
/*
Plugin Name: Messager Widget
Plugin URI: net.tutsplus.com
Description: Displays any message designed
Author: Jeffrey Way
Author URI: http://net.tutsplus.com
version: 1.0
*/

class Messager extends WP_Widget {
	function __construct() {
		$params = array(
			'description' => 'Display messages to readers',
			'name' => 'Messager'
		);
		parent::__construct('Messager', '', $params);
	}

	Public function form($instance) {
		// print_r($instance);
		extract($instance);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title');?>">Title: </label>
			<input 
				class="widefat"
				id="<?php echo $this->get_field_id('title');?>"
				name="<?php echo $this->get_field_name('title');?>"
				value="<?php if(isset($title)) echo esc_attr($title);?>"
			/>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('description');?>">Description: </label>
			<textarea  
				class = "widefat"
				rows=10"
				id = "<?php echo $this->get_field_id('description');?>"
				name = "<?php echo $this->get_field_name('description');?>"><?php if(isset($description)) echo esc_attr($description); ?></textarea>
		</p>
		<?php
	}


	Public function widget($args, $instance) {
		// print_r($args); die();
		// print_r($instance);

		extract($args);
		extract($instance);

		$title = apply_filters('widget_title', $title);
		$description = apply_filters('widget_description', $description);

		if (empty($title)) $title = 'My Status';

		echo $before_widget;
			echo $before_title . $title . $after_title;
			echo "<p>$description</p>";
		echo $after_widget;
	}

}

add_action('widgets_init', 'jw_register_messager');
function jw_register_messager() {
	register_widget('Messager');
}
