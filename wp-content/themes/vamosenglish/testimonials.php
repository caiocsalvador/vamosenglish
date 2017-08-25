<?php 
/*
	Template Name: Testimonials32
*/
?>

<? get_header(); ?>

<main role="main">
    <section id="inner">
        <div class="inner-bg"></div>
        <div class="container">
            <? $page_title = $wp_query->post->post_title; ?>
            <h1 class="title text-left"><?=$page_title?></h1>
            <ul class="breadcumb">
                <li><a href="<?=home_url();?>">Home</a></li>
				<li>Testimonials</li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="single">
                    <?php $args = array(
                        'posts_per_page'   => -1,
                        'post_type'        => 'testimonials'
                    );
                    ?>
                    <? $query = new WP_Query($args);?>
                    <? if ( $query->have_posts() ): ?>
                        <? while ( $query->have_posts() ) : $query->the_post()?>
                            <?php get_template_part('template-parts/testimonials-list'); ?>
                        <? endwhile; ?>
                    <? endif; ?>
                    <?php wp_reset_postdata(); ?>         
                    </div>    
                </div>
                <div class="col-md-4">
                    <div id="sidebar">
                        <? get_sidebar("sidebar-1"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
<? get_footer(); ?>