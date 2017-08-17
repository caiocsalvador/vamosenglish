<!doctype html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<title><?php bloginfo('name') ?> <?php wp_title('|'); ?></title>
		<? wp_head(); ?>
	</head>
	<body <?php body_class(); ?> >

	<header>
		<?php wp_nav_menu(array('theme_location'=>'primary')); ?>
	</header>
	<div class="search-form-container">
		<?php get_search_form(); ?>
	</div>
	