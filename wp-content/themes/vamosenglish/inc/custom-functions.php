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
	        'name' => __( 'Main Sidebar', 'theme-slug' ),
	        'id' => 'sidebar-1',
	        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
	        'before_widget' => '<li id="%1$s" class="widget %2$s">',
			'after_widget'  => '</li>',
			'before_title'  => '<h2 class="widgettitle">',
			'after_title'   => '</h2>',
	    )
	);

}

add_action( 'widgets_init', 'my_widgets' );


/*
=======================================
	CREATE POST TYPE AND TAXONOMIES
=======================================
*/

/*add_action('init', 'create_institucional');

function create_institucional(){
	$labels = array(
		'name' 				=> 'Intistucional',
		'singular_name' 	=> 'Intistucional',
		'menu_name' 		=> 'Intistucional',
		'name_admin_bar' 	=> 'Intistucional',
	);
	$args = array(
		'labels' 			=> $labels,
		'show_ui'			=> true,
		'show_in_menu'		=> true,
		'capability_type'	=> 'post',
		'taxonomies'  		=> array( 'categorias_institucional' ),
		'hierarchical'		=> false,
		'menu_icon'			=> 'dashicons-store',
		'supports'			=> array('title', 'editor', 'author', 'thumbnail'),
		'public' 			=> true,
      	'has_archive' 		=> true,
      	'rewrite' 			=> array('slug' => 'cat_institucional'),
	);

	register_post_type('institucional', $args);
}

function categorias_institucional(){

	//add new taxonomy hierarchical

	$labels = array(
		'name' => 'Categorias',
		'singular_name' => 'Categoria',
		'search_item' => 'Buscar Categoria',
		'all_items' => 'Todos Categoria',
		'parent_item' => 'Categoria pai',
		'parent_item_colon' => 'Categoria pai:',
		'edit_item' => 'Editar Categoria',
		'update_item' => 'Update Categoria',
		'add_new_item' => 'Adicionar Categoria',
		'new_item_name' => 'Nova Categoria',
		'menu_name' => 'Categorias',
	);

	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
	);

	register_taxonomy('categorias_institucional', array('institucional'), $args);

}

add_action('init', 'categorias_institucional');*/

?>