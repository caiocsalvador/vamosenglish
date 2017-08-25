<?php

/*
=======================================
	CREATE POST TYPE AND TAXONOMIES
=======================================
*/

/* SERVICES */

add_action('init', 'create_services');

function create_services(){
	$labels = array(
		'name' 				=> 'Services',
		'singular_name' 	=> 'Services',
		'menu_name' 		=> 'Services',
		'name_admin_bar' 	=> 'Services',
	);
	$args = array(
		'labels' 			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'taxonomies'  		=> array( 'categories_services' ),
		'hierarchical'		=> false,
		'menu_icon'			=> 'dashicons-awards',
		'supports'			=> array('title', 'editor', 'author', 'thumbnail'),
		'public' 			=> true,
      	'has_archive' 		=> true,
		'rewrite' 			=> true,
		'menu_position'		=> 5
	);

	register_post_type('services', $args);
}

function categories_services(){

	//add new taxonomy hierarchical

	$labels = array(
		'name' => 'Categories (Services)',
		'singular_name' => 'Category',
		'search_item' => 'Search Category',
		'all_items' => 'All Category',
		'parent_item' => 'Parent Category',
		'parent_item_colon' => 'Parent Category:',
		'edit_item' => 'Edit Category',
		'update_item' => 'Update Category',
		'add_new_item' => 'Add Category',
		'new_item_name' => 'New Category',
		'menu_name' => 'Services Categories',
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	);

	register_taxonomy('categories_services', array('services'), $args);

}

add_action('init', 'categories_services');


/* SCHOOLS */

add_action('init', 'create_schools');

function create_schools(){
	$labels = array(
		'name' 				=> 'Schools',
		'singular_name' 	=> 'Schools',
		'menu_name' 		=> 'Schools',
		'name_admin_bar' 	=> 'Schools',
	);
	$args = array(
		'labels' 			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'taxonomies'  		=> array( 'categories_schools' ),
		'hierarchical'		=> false,
		'menu_icon'			=> 'dashicons-welcome-learn-more',
		'supports'			=> array('title', 'editor', 'author', 'thumbnail'),
		'public' 			=> true,
      	'has_archive' 		=> true,
		'rewrite' 			=> true,
		'menu_position'		=> 5
	);

	register_post_type('schools', $args);
}

function categories_schools(){

	//add new taxonomy hierarchical

	$labels = array(
		'name' => 'Categories (Schools)',
		'singular_name' => 'Category',
		'search_item' => 'Search Category',
		'all_items' => 'All Category',
		'parent_item' => 'Parent Category',
		'parent_item_colon' => 'Parent Category:',
		'edit_item' => 'Edit Category',
		'update_item' => 'Update Category',
		'add_new_item' => 'Add Category',
		'new_item_name' => 'New Category',
		'menu_name' => 'Schools Categories',
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	);

	register_taxonomy('categories_schools', array('schools'), $args);

}

add_action('init', 'categories_schools');

/* TESTIMONIALS */

add_action('init', 'create_testimonials');

function create_testimonials(){
	$labels = array(
		'name' 				=> 'Testimonials',
		'singular_name' 	=> 'Testimonials',
		'menu_name' 		=> 'Testimonials',
		'name_admin_bar' 	=> 'Testimonials',
	);
	$args = array(
		'labels' 			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'taxonomies'  		=> array( 'categories_testimonials' ),
		'hierarchical'		=> false,
		'menu_icon'			=> 'dashicons-format-status',
		'supports'			=> array('title', 'editor', 'author', 'thumbnail'),
		'public' 			=> true,
      	'has_archive' 		=> true,
		'rewrite' 			=> true,
		'menu_position'		=> 5
	);

	register_post_type('testimonials', $args);
}

function categories_testimonials(){

	//add new taxonomy hierarchical

	$labels = array(
		'name' => 'Categories (Testimonials)',
		'singular_name' => 'Category',
		'search_item' => 'Search Category',
		'all_items' => 'All Category',
		'parent_item' => 'Parent Category',
		'parent_item_colon' => 'Parent Category:',
		'edit_item' => 'Edit Category',
		'update_item' => 'Update Category',
		'add_new_item' => 'Add Category',
		'new_item_name' => 'New Category',
		'menu_name' => 'Testimonials Categories',
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	);

	register_taxonomy('categories_testimonials', array('testimonials'), $args);

}

add_action('init', 'categories_testimonials');