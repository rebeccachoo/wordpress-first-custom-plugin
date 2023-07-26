<?php
/**
 * Plugin Name: Rebecca Plug in
 * Description: Learning Purpose
 */

 // Remove the admin bar from the front end
//  add_filter('show_admin_bar', '__return_false');

 function addStyleSheets(){
    wp_enqueue_style('style', get_stylesheet_uri('/Applications/MAMP/htdocs/wordpress/sample.css'));
 }
 add_action('wp_enqueue_style', 'addStyleSheets');
