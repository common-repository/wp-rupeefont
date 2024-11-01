<?php
/*
Plugin Name: WP RupeeFont
Plugin URI: https://github.com/ajmaurya99/wp-rupeefont
Description: WP RupeeFont is a WordPress plugin used to add Indian Rupee Symbol on your WordPress blog or website. It converts all the Rs / Rs. symbol to Indian Rupee Symbol.
Version: 1.1.0
Author: Ajay Maurya
Author URI: http://ajmaurya.com/
License: GNU General Public License v3.0
License URI: https://www.gnu.org/licenses/gpl-3.0.en.html
*/


/* 
Include WebRupee Javascript File
 */
add_action('wp_enqueue_scripts', 'wp_rupeefont_js');
function wp_rupeefont_js()
{
    wp_enqueue_script('wp-rupeefont-script', plugins_url('assets/js/webrupee.js', __FILE__));
	
	$plugin_url = array( 'pluginUrl' => plugins_url() );
  //after wp_enqueue_script
  wp_localize_script( 'wp-rupeefont-script', 'global_name', $plugin_url );
}



/*
Include WebRupee CSS File
 */
add_action('wp_enqueue_scripts', 'wp_rupeefont_css');
function wp_rupeefont_css()
{
    wp_enqueue_style('wp-rupeefont-style', plugins_url('assets/css/webrupee.css', __FILE__));
}

