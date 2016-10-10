<?php
/*
Plugin Name: Twitter Shower
Plugin URI: net.tutsplus.com
Description: Simple shortcode.
Author: Jeffrey Way
Author URI: http://net.tutsplus.com
version: 1.0
*/

// add_shortcode('twitter', 'jw_twitter')

// add_shortcode('twitter', function(){
// 	echo "hi";
// });

// add_shortcode('twitter', function(){
// 	return "hi";
// });

// add_shortcode('twitter', function(){
// 	return '<a href="http://twitter.com/envatowebdev">Follow Me on Twitter!</a>';
// });

// add_shortcode('twitter', function($atts){
// print_r($atts); 
// 	return '<a href="http://twitter.com/envatowebdev">Follow Me on Twitter!</a>';
// });

// add_shortcode('twitter', function($atts, $content){
// 	print_r($content); die();
// 	if (!isset($atts['username'])) $atts['username'] = 'envatowebdev';
// 	return '<a href="http://twitter.com/' . $atts['username'] . '">Follow Me on Twitter!</a>';
// });

// add_shortcode('twitter', function($atts, $content){
// 	if (!isset($atts['username'])) $atts['username'] = 'envatowebdev';
// 	if (empty($content)) $content = 'Follow me on Twitter!';
// 	return '<a href="http://twitter.com/' . $atts['username'] . '">' . $content . '</a>';
// });

add_shortcode('twitter', function($atts, $content){
	$atts = shortcode_atts(
		array(
			'username' => 'envatowebdev',
			'content' => !empty($content)? $content : 'Follow me on Twitter!'
		), $atts 
	);

	extract($atts);
	return "<a href='http://twitter.com/$username'>$content</a>";
});

// add_shortcode('twitter', function($atts, $content){
// 	$atts = shortcode_atts(
// 		array(
// 			'username' => 'envatowebdev',
// 			'content' => !empty($content)? $content : 'Follow me on Twitter!',
// 			'show_tweets' => false,
// 			'tweet_reset_time' => 10,
// 			'num_tweets' => 5
// 		), $atts 
// 	);

// 	extract($atts);

// 	if ($show_tweets) {
// 		$tweets = fetch_tweets($num_tweets, $username, $tweet_reset_time);
// 	}

// 	return "<a href='http://twitter.com/$username'>$content</a>";
// });

// function fetch_tweets($num_tweets, $username, $tweet_reset_time) {
// 	$tweets =  
// }

