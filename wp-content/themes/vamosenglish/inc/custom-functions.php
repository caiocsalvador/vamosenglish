<?php 

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/* Remove WP version information from the header */ 
function remove_wp_version(){
	return '';
}
add_filter('the_generator', 'remove_wp_version');

/* Creating widgets / sidebars */ 
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

/* New funcition for excerpt length */ 
function custom_excerpt_length( $length ) {
	return $length;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Change excerpt more */ 
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

?>