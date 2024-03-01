<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  

// functions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well



// Main switch to get frontend assets from a Vite dev server OR from production built folder
// it is recommended to move it into wp-config.php
define('IS_VITE_DEVELOPMENT', false);

include "inc/inc.vite.php";
 
require get_stylesheet_directory() . '/inc/widgets.php'; 
require get_stylesheet_directory() . '/inc/shortcodes.php';
 
/* THUMBNAIL URL - START */

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );
function wpdocs_theme_setup() { 
    add_image_size( 'big-thumbnail-card', 485, 282, true ); // (cropped)
    /* add_image_size( 'medium-thumbnail-card', 420, 282, true );   */
}
 
/* function thumbnail_image_url($size){
    global $post; 
    $image_id = get_post_thumbnail_id($post -> ID);
    $main_image = wp_get_attachment_image_src($image_id, $size);
    //0 = ruta o url, 1 = width, 2 = height, 3 = boolean
    return empty($main_image[0])? false: $main_image[0] ;
}    */
 
/* THUMBNAIL URL - END */

function thumbnail_image_url($size = 'full') {
  global $post;
  
  $image_id = get_post_thumbnail_id($post->ID);
  $main_image = wp_get_attachment_image_src($image_id, $size);
  $default_url = get_template_directory_uri()."/build/img/thumbnail-default.jpg";
  // 0 = ruta o URL, 1 = width, 2 = height, 3 = boolean
  return empty($main_image[0]) ? $default_url : $main_image[0];
}
 

// remove any tags  of excerpt 
remove_filter('the_excerpt', 'wpautop'); 
 


/* REMOVE DASHICONS - START */
add_action( 'wp_print_styles', 'zgwd_dequeue_styles' );
function zgwd_dequeue_styles() { 
    if ( ! is_user_logged_in() ) {
        wp_dequeue_style( 'dashicons' );
        wp_deregister_style( 'dashicons' );
    }
}
/* REMOVE DASHICONS - END */
  
 

/* SHOW YEAR - START */
function showYear($text=''){
 
	echo '<p>  © '.date("Y").' '.$text['text'].' </p>';
} 

add_shortcode ('year','showYear');
/* SHOW YEAR - END */



function disable_plugin_updates( $value ) {
    if ( isset($value) && is_object($value) ) {
      if ( isset( $value->response['advanced-custom-fields-pro/acf.php'] ) ) {
        unset( $value->response['advanced-custom-fields-pro/acf.php'] );
      }
    }
    return $value;
}
  add_filter( 'site_transient_update_plugins', 'disable_plugin_updates' );

 // Deshabilitar style.min.css de block-library
/* function deshabilitar_block_library_styles() {
  wp_dequeue_style( 'wp-block-library' ); 
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
} 
add_action( 'wp_enqueue_scripts', 'deshabilitar_block_library_styles', 100 ); */



 