<? get_header(); ?>
<main role="main">	
	<div class="home-banner">
		<div class="slider">
			<?php $args = array(
				'posts_per_page'   => -1,
				'post_type'        => 'slides'
			);
			?>
			<? $query = new WP_Query($args);?>
			<? if ( $query->have_posts() ): ?>
				<? while ( $query->have_posts() ) : $query->the_post()?>
					<? $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  ?>
					<div class="slide d-flex align-items-center" style="background-image: url(<?= $featured_img_url ?>">
						<div class="container hide-on-start">
							<div class="info-slider">
								<?php the_content(); ?>
							</div>
							
							<!--<h2>&iquest;Por que con nosotros?</h2>
							<p>
								Somos una <b>agencia especializada</b> en la <b>acomodacion</b> y orientacion estudantil en Dublin, contamos con personal mexicano en <b>Irlanda</b> tanto como en la Cd. De Mexico.<br><br>
								<b>Vamos English</b> es una agencia de intercambios asociada con <b>ISAI</b>, una de las agencias irlandesas mas reconnocidas en Europa. Trabajamos solo con las <b>mejores escuelas de Dublin</b>
							</p>
							<div class="cont-bnt">
								<a href="#" class="btn-plus">SABER MAS</a>
							</div>-->
						</div>
					</div>		
				<? endwhile; ?>
			<? endif; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	</div>
	<section id="blog">
		<div class="container">
			<h2 class="title hide-on-start">Blog</h2>
			<div class="posts-list">
				<div class="row">				
					<?php
						$args = array(
							'posts_per_page' => 4
						);
					?>
					<? $query = new WP_Query($args);?>
					<? if ( $query->have_posts() ): ?>
						<? while ( $query->have_posts() ) : $query->the_post()?>
							<?php get_template_part('template-parts/post-home', get_post_format()); ?>
						<? endwhile; ?>
					<? endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>			
		</div>
	</section>
	<section id="services">
		<div class="container">
			<h2 class="title">Servicios</h2>
			<p class="text-center title-description">En Vamos English te ayudamos a encontrar el mejor curso de inglés en <br> cualquiera de nuestras escuelas certificadas, acompañado de un completo programa académico.</p>
			<div class="list-services">
				<div class="row">				
					<?php $args = array(
						'posts_per_page'   => -1,
						'post_type'        => 'services'
					);
					?>
					<? $query = new WP_Query($args);?>
					<? if ( $query->have_posts() ): ?>
						<? while ( $query->have_posts() ) : $query->the_post()?>
							<?php get_template_part('template-parts/services-home'); ?>
						<? endwhile; ?>
					<? endif; ?>
					<?php wp_reset_postdata(); ?>
				</div>				
			</div>
		</div>
	</section>
	<section id="testimonials" class="d-flex align-items-center">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-sm-12">
					<div class="carousel-testimonials">
						<?php $args = array(
                            'posts_per_page'   => -1,
                            'post_type'        => 'testimonials'
                        );
                        ?>
                        <? $query = new WP_Query($args);?>
                        <? if ( $query->have_posts() ): ?>
                            <? while ( $query->have_posts() ) : $query->the_post()?>
                                <?php get_template_part('template-parts/home-testimonials'); ?>
                            <? endwhile; ?>
                        <? endif; ?>
                        <?php wp_reset_postdata(); ?>					
						
					</div>
				</div>
			</div>
		</div>
	</section>
<? get_footer(); ?>