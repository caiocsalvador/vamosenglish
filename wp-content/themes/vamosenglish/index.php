<? get_header(); ?>
<main role="main">	
<h1>Theme</h1>
	<!-- LOOP WITH CATEGORY -->
	<? $category = get_cat_id('Test');?>
	<?php
		$args = array(
			'cat' => $category,
			'posts_per_page' => -1
		);
	?>
	<? $query = new WP_Query($args);?>
	<? if ( $query->have_posts() ): ?>
		<? while ( $query->have_posts() ) : $query->the_post()?>
			<?php get_template_part('template-parts/content', get_post_format()); ?>
		<? endwhile; ?>
		<?php next_posts_link(); ?>
		<?php previous_posts_link(); ?>
	<? endif; ?>
	<?php wp_reset_postdata(); ?>

	<!-- NORMAL LOOP -->
	<? if(have_posts()): ?>
		<? while(have_posts()): the_post(); ?>
			<?php get_template_part('template-parts/content', get_post_format()); ?>
		<? endwhile; ?>
		<?php next_posts_link(); ?>
		<?php previous_posts_link(); ?>
	<? endif; ?>
	<? get_sidebar(); ?>
</main>
<? get_footer(); ?>