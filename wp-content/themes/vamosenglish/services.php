<?php 
/*
	Template Name: Services
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
				<li>Servicios</li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="single">
					<? if(have_posts()): ?>
						<? while(have_posts()): the_post(); ?>
							<?php get_template_part('template-parts/content-services'); ?>
						<? endwhile; ?>
					<? endif; ?>
                    </div>
                    <div class="row">
                        <?php $args = array(
                            'posts_per_page'   => -1,
                            'post_type'        => 'services'
                        );
                        ?>
                        <? $query = new WP_Query($args);?>
                        <? if ( $query->have_posts() ): ?>
                            <? while ( $query->have_posts() ) : $query->the_post()?>
                                <?php get_template_part('template-parts/services-list'); ?>
                            <? endwhile; ?>
                        <? endif; ?>
                        <?php wp_reset_postdata(); ?>                        
                    </div>        
                    <div class="row single">      
                        <div class="col-md-12">
                            <? $value = get_field( "programa_academico" ); ?>
                            <?= $value?>
                            <h4>Más infomacion</h4>
                            <p>Nuestro equipo está a su disposición. No Dude en contactarnos para cualquier información adicional aclaración que necesite.</p>
                            <?= do_shortcode('[contact-form-7 id="58" title="Services Contact Form"]'); ?>
                        </div>               
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