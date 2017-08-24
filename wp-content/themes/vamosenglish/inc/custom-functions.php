<?php 

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

function remove_wp_version(){
	return '';
}
add_filter('the_generator', 'remove_wp_version');

function my_widgets() {

    register_sidebar( 
    	array(
	        'name' => __( 'Blog Sidebar', 'blog-sidebar' ),
	        'id' => 'blog-sidebar',
	        'description' => __( 'Widgets in this area will be shown on the blog page.', 'blog-sidebar' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
	    )
	);

	register_sidebar( 
    	array(
	        'name' => __( 'Main Sidebar', 'sidebar-1' ),
	        'id' => 'sidebar-1',
	        'description' => __( 'Widgets in this area will be shown on all pages excerpt blog or pages wich do not support sidebar.', 'sidebar-1' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widgettitle">',
			'after_title'   => '</h4>',
	    )
	);

}

add_action( 'widgets_init', 'my_widgets' );

function custom_excerpt_length( $length ) {
	return $length;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function wpdocs_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}	
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}

/**
 * Filter arguments of tag cloud widget to enlarge our text and
 * add commas
 */
 function myfunc_filter_tag_cloud($args) {
    /*$args['smallest'] = 18;
    $args['largest'] = 32;
    $args['unit'] = 'px';*/
    $args['separator']= ', ';
    return $args;
}
add_filter ( 'widget_tag_cloud_args', 'myfunc_filter_tag_cloud');

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
		'rewrite' 			=> array('slug' => 'cat_services'),
		'menu_position'		=> 5
	);

	register_post_type('services', $args);
}

function categories_services(){

	//add new taxonomy hierarchical

	$labels = array(
		'name' => 'categories',
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

?>