<?php 

function enqueue_my_scripts() {
	/******** STYLES **********/
	/* Bootstrap */
	/*wp_enqueue_style('bootstrap-style', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css');*/
	/* Custom style */
	wp_enqueue_style('custom-style', get_template_directory_uri().'/dist/css/style.css');

	/******** SCRIPTS **********/
	/* JQUERY */
	/*wp_deregister_script('jquery');
	wp_register_script('jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array(), null, true);
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-migrate', 'https://code.jquery.com/jquery-migrate-3.0.0.min.js', array(), null, true);*/
	/* BOOTSTRAP */
	/*wp_enqueue_script('tether', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), null, true);
	wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array('jquery'), null, true);*/
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/dist/js/bundle.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

?>