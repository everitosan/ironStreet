<?php
/*
 * Plugin Name: Iroonstreet oficial theme
 * Description: Helps to handle the tickest on the web
 * Version: 1.0
 * Author: Evesan
 * License: GPL2
*/


//Global variables

$plugin_url = WP_PLUGIN_URL . '/wp-ironstreet';
$options = array();

//Add link to menu

function wp_ironsteet_menu() {
  add_options_page(
    'official iron street Plugin',
    'Products',
    'manage_options',
    'wp-ironstreeet-items',
    'wp_ironsteet_items_page'
  );
}

add_action('admin_menu', 'wp_ironsteet_menu');


//Add page to menu link


function wp_ironsteet_items_page() {
  if(!current_user_can('manage_options') ) {
    wp_die("You do not have sufficient permission to access this page.");
  }

  global $plugin_url;
  global $options;

  require('inc/options_page_wrapper.php');
}


//Add styles to menu head

function wp_ironsteet_styles() {
  wp_enqueue_style('wp_ironsteet_styles', plugins_url('wp-ironstreet/wp-ironstreet-styles.css') );
}

add_action('admin_head', wp_ironsteet_styles);
?>
