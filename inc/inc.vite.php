<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
    exit;  
    
/*
 * VITE & Tailwind JIT development
 * Inspired by https://github.com/andrefelipe/vite-php-setup
 *
 */

// dist subfolder - defined in vite.config.json
define('DIST_DEF', 'build');

// defining some base urls and paths
define('DIST_URI', get_template_directory_uri() . '/' . DIST_DEF);
define('DIST_PATH', get_template_directory() . '/' . DIST_DEF);

// js enqueue settings
define('JS_DEPENDENCY', array()); // array('jquery') as example
define('JS_LOAD_IN_FOOTER', true); // load scripts in footer?

// deafult server address, port and entry point can be customized in vite.config.json
define('VITE_SERVER', 'http://localhost:3000');
/* define('VITE_SERVER', 'http://grupotendenze.pe/wp-content/themes/grupotendenze'); */
define('VITE_ENTRY_POINT', '/main.js');

// enqueue hook
add_action( 'wp_enqueue_scripts', function() {
    
    if (defined('IS_VITE_DEVELOPMENT') && IS_VITE_DEVELOPMENT === true) {

        // insert hmr into head for live reload
        function vite_head_module_hook() {
            echo '<script type="module" crossorigin src="' . VITE_SERVER . VITE_ENTRY_POINT . '"></script>';
        }
        add_action('wp_head', 'vite_head_module_hook');    
        wp_enqueue_script( 'jquery' );


    } else {

        // production version, 'npm run build' must be executed in order to generate assets
        // ----------


 

            // registers scripts and stylesheets
            wp_register_style( 'main', get_template_directory_uri().'/build/css/main.css' , [], false );
            wp_register_script( 'main', get_template_directory_uri().'/build/js/main.js', [], false, true );
        
            // enqueue global assets
            wp_enqueue_script( 'jquery' );
            wp_enqueue_style( 'main' );
            wp_enqueue_script( 'main' ); 


        // read manifest.json to figure out what to enqueue
       /*  $manifest = json_decode( file_get_contents( DIST_PATH . '/manifest.json'), true );
        
        // is ok
        if (is_array($manifest)) {
            
            // get first key, by default is 'main.js' but it can change
            $manifest_key = array_keys($manifest);
            if (isset($manifest_key[0])) {
                // enqueue CSS files
                print_r($manifest_key);   
                foreach($manifest[$manifest_key[0]]['css'] as $css_file) {
                    wp_enqueue_style( 'main', DIST_URI . 'css/' . $css_file );
                }
                 */
                // enqueue main JS file
               /*  $js_file = @$manifest[$manifest_key[0]]['file'];
                if ( ! empty($js_file)) {
                    wp_enqueue_script( 'main', DIST_URI . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER );
                } */
        /*         
            }

        } */
        // read manifest.json to figure out what to enqueue
       /*  $manifest = json_decode( file_get_contents( DIST_PATH . '/manifest.json'), true );

        // is ok
        if (is_array($manifest)) {
            
            // get first key, by default is 'main.js' but it can change
            $manifest_key = array_keys($manifest);
            if (isset($manifest_key[0])) {
                // enqueue CSS files
                $css_files = @$manifest['main.css']['file'];
                print_r(  $css_files );    
                if (is_array($css_files)) { 
                    foreach($css_files as $css_file) {
                        wp_enqueue_style( 'main', DIST_URI . '/' . $css_file );
                    }
                }
                   wp_enqueue_style( 'app', DIST_URI.'/css/app.css' , [], false );   
                // enqueue main JS file
                $js_file = @$manifest[$manifest_key[0]]['file'];
                if ( ! empty($js_file)) {
                    wp_enqueue_script( 'main', DIST_URI . '/' . $js_file, JS_DEPENDENCY, '', JS_LOAD_IN_FOOTER );
                }
            }
        } */

    }


});