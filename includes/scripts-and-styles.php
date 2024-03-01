<?php

 

add_action( 'wp_enqueue_scripts', function () {

	// registers scripts and stylesheets
	wp_register_style( 'main', get_template_directory_uri().'/build/css/main.css' , [], false );
	wp_register_script( 'main', get_template_directory_uri().'/build/js/main.js', [], false, true );

	// enqueue global assets
	wp_enqueue_script( 'jquery' );
	wp_enqueue_style( 'main' );
	wp_enqueue_script( 'main' );

} );