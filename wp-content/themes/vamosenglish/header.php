<!doctype html>
<html <?php language_attributes();?> >
	<head>
		<meta charset="<?php bloginfo('charset') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!--<meta name="description" content="<?php //bloginfo('description'); ?>">-->
		<? wp_head(); ?>		
		<title><?php wp_title('|'); ?></title>
	</head>
	<body <?php body_class(); ?>>
	<header>
		<div class="container">
			<div class="cont-header d-flex justify-content-between">
				<h1 class="logo">Vamos English
					<a href="<?=home_url();?>">
					<?php 
					$time = time();
					?>
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_vamos_english.gif?<?=$time?>" alt="" style="width:250px; height:214px"/>
					</a>
				</h1>
				<div class="cont-lines d-flex flex-column">
					<div class="top-header d-flex flex-row justify-content-end">
						<div class="social-header">
							<a href="#" class="social-icon shadow-5 insta"></i></a>
							<a href="#" class="social-icon shadow-5 tt"></a>
							<a href="#" class="social-icon shadow-5 face"></a>
							<a href="#" class="social-icon shadow-5 whats"></a>
						</div>
						<nav class="top-menu">
							<?php wp_nav_menu(array('theme_location'=>'top')); ?>
						</nav>
					</div>
					<nav class="main-menu">
						<?php wp_nav_menu(array('theme_location'=>'main')); ?>		
					</nav>
				</div>
			</div>	
		</div>	
	</header>
	<div class="cont-fixed-menu">
		<div class="container">
			<div class="d-flex justify-content-between">
				<a href="<?=home_url();?>" class="fixed-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fixed-logo.png" alt=""></a>
				<nav class="fixed-menu align-self-center">
					<?php wp_nav_menu(array('theme_location'=>'fixed')); ?>		
				</nav>
			</div>
		</div>
	</div>