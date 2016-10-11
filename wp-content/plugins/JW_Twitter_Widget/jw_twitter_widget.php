<?php
/*
 * Plugin Name: JW Twitter Widget
 * Plugin URI: http://net.tutsplus.com
 * Description: Display tweets in the sidebar of your blog.
 * Author: Jeffrey Way
 * Author URI: http://net.tutsplus.com
 * Version: 1.0
 */

class JW_Twitter_Widget extends WP_Widget {
    function __construct() {
      $options = array(
        'description' => 'Display and cache tweets.',
        'name' => 'Display Tweets'
      );
      
      // id, name, options
      parent::__construct('JW_Twitter_Widget', '', $options);
    }
    
    public function form($instance) {
      extract($instance);
      ?>
        <p>
          <label for="<?php echo $this->get_field_id('title');?>">Title: </label>
          <input 
            class="widefat"
            id="<?php echo $this->get_field_id('title');?>"
            name="<?php echo $this->get_field_name('title');?>"
            value="<?php if(isset($title)) echo esc_attr($title);?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('username'); ?>">Twitter Username:</label> 
          <input class="widefat"
            type="text"
            id="<?php echo $this->get_field_id('username'); ?>"
            name="<?php echo $this->get_field_name('username'); ?>"
            value="<?php if ( isset($username) ) echo esc_attr($username); ?>" />
        </p>
        <p>
          <label for="<?php echo $this->get_field_id('tweet_count'); ?>">Number of Tweets to Retrieve:</label>
          <input
            type="number"
            class="widefat"
            style="width: 80px;"
            id="<?php echo $this->get_field_id('tweet_count');?>"
            name="<?php echo $this->get_field_name('tweet_count');?>"
            min="1" 
            max="10"
            value="<?php echo !empty($tweet_count) ? $tweet_count : 5; ?>" />
        </p>
      <?php
    }

    public function widget($args, $instance) {
      /*print_r($args); die();*/
      extract($args);
      extract($instance);
      
      if(empty($title)) $title = 'Recent Tweets';
      $data = $this->Twitter($tweet_count, $username);
    }

    private function twitter($tweet_count, $username) {
      if (empty($username)) return false;
    }
}
 
add_action('widgets_init', 'register_jw_widget_widget');
function register_jw_widget_widget()
{
  register_widget('JW_Twitter_Widget');
}
