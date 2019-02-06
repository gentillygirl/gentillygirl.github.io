<?php
/**
 * @package WordPress
 * @subpackage Classic_Theme
 */

automatic_feed_links();

remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '',
		'after_title' => '',
	));

?>
