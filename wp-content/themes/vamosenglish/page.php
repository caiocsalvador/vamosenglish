<? get_header(); ?>

<main role="main">
    <section id="inner">
        <div class="inner-bg"></div>
        <div class="container">
            <? $page_title = $wp_query->post->post_title; ?>
            <h1 class="title text-left"><?=$page_title?></h1>
            <ul class="breadcumb">
                <li><a href="<?=home_url();?>">Home</a></li>
				<li class="active"><?=$page_title?></li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="single">
					<? if(have_posts()): ?>
						<? while(have_posts()): the_post(); ?>
						<?php the_content(); ?>
						<div class="cont-link-post d-flex justify-content-between">
							<div class="addtoany-cont">
								<?= do_shortcode("[addtoany]")?>
							</div>
						</div>
						<? endwhile; ?>
					<? endif; ?>
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