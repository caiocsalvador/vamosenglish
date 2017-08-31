<?php 

function enqueue_my_scripts() {
	/******** STYLES **********/
	/* FONTS */
	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css?family=Lora:400i,700i|Montserrat:300,400,500,500i,700|Source+Sans+Pro:300,400,500,700');
	
	/* MAIN */
	wp_enqueue_style('custom-style', get_template_directory_uri().'/dist/css/style.css');

	/******** SCRIPTS **********/
	/* JQUERY 
	wp_deregister_script('jquery');*/

	/* Font Awesome */
	wp_enqueue_script('font-awesome', 'https://use.fontawesome.com/aaabae4c97.js', array(), null, true);

	/* BUNDLE */
	wp_enqueue_script('bundle', get_template_directory_uri().'/dist/js/bundle.js', array(), null, true);	
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

?>