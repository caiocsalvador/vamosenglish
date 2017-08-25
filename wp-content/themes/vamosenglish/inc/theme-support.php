<?php 

function my_theme_setup(){

	/* MENUS */
	add_theme_support('menus');
	register_nav_menu('top', "Top Navigation");
	register_nav_menu('main', "Main Header Navigation");
	register_nav_menu('fixed', "Fixed Header Navigation");

	/* THUMBNAILS */
	add_theme_support('post-thumbnails');

	/* POST FORMATS */
	add_theme_support('post-formats', array( 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat'));

	/* SEARCH */
	add_theme_support('html5');
}

add_action('init', 'my_theme_setup');


?>