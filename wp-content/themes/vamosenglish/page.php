<? get_header(); ?>
<main>
	<h1>Page</h1>
	<!-- NORMAL LOOP -->
	<? if(have_posts()): ?>
		<? while(have_posts()): the_post(); ?>
			<?php get_template_part('template-parts/content', get_post_format()); ?>			
		<? endwhile; ?>
	<? endif; ?>
	<? get_sidebar(); ?>
</main>
<? get_footer(); ?>