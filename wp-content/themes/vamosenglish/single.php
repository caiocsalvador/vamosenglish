<? get_header(); ?>
<main>
	<h1>Single</h1>
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