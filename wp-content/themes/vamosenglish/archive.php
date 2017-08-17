<? get_header(); ?>
<main>
	<!-- NORMAL LOOP -->
	<? if(have_posts()): ?>
		<?php the_archive_title('<h1>','</h1>'); ?>
		<?php the_archive_description('<p>','</p>'); ?>
		<? while(have_posts()): the_post(); ?>
			<?php get_template_part('template-parts/content', get_post_format()); ?>
		<? endwhile; ?>
		<?php the_posts_navigation(); ?>
	<? endif; ?>
	<? get_sidebar(); ?>
</main>
<? get_footer(); ?>