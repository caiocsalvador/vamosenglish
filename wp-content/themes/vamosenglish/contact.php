<?php 
/*
	Template Name: Contact
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
				<li>Contact</li>
            </ul>
            <div class="row">
                <div class="col-md-6">
                    <div class="single">
                    <? if ( have_posts() ): ?>
                        <? while ( have_posts() ) : the_post()?>
                            <?php the_content(); ?>
                        <? endwhile; ?>
                        <?= do_shortcode('[contact-form-7 id="58" title="Services Contact Form"]') ?>
                    <? endif; ?>
                    <?php wp_reset_postdata(); ?>         
                    </div>    
                </div>
                <div class="col-md-6">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.863307333066!2d-99.16980478453401!3d19.41831118689246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ff387519756d%3A0x67b534fc1e2f01ce!2sAv+Oaxaca+96%2C+Roma+Nte.%2C+06700+Ciudad+de+M%C3%A9xico%2C+CDMX%2C+M%C3%A9xico!5e0!3m2!1spt-BR!2sbr!4v1503694411996" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
<? get_footer(); ?>