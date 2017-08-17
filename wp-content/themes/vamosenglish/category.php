<? get_header(); ?>
<main>
	<h1>Category</h1>
	<?php 
		$currentPage = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array("posts_per_page" => 3, 'paged' => $currentPage);
	 ?>
	<!-- NORMAL LOOP -->
	<? if(have_posts()): ?>
		<? while(have_posts()): the_post(); ?>
			<?php get_template_part('template-parts/content', get_post_format()); ?>
			<small><?php the_category(' '); ?> | <?php edit_post_link(); ?></small>
			<?php next_post_link(); ?>
			<?php previous_post_link(); ?>
			<? if (comments_open()): ?>
				<? comments_template(); ?>
			<? endif; ?>
		<? endwhile; ?>
	<? endif; ?>
	<? get_sidebar(); ?>
</main>
<? get_footer(); ?>