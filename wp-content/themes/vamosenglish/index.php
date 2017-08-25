<? get_header(); ?>
<main role="main">	
	<div class="home-banner">
		<div class="container hide-on-start">
			<h2>&iquest;Por que con nosotros?</h2>
			<p>
				Somos una <b>agencia especializada</b> en la <b>acomodacion</b> y orientacion estudantil en Dublin, contamos con personal mexicano en <b>Irlanda</b> tanto como en la Cd. De Mexico.<br><br>
				<b>Vamos English</b> es una agencia de intercambios asociada con <b>ISAI</b>, una de las agencias irlandesas mas reconnocidas en Europa. Trabajamos solo con las <b>mejores escuelas de Dublin</b>
			</p>
			<div class="cont-bnt">
				<a href="#" class="btn-plus">SABER MAS</a>
			</div>			
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
						<div class="testimonial d-flex flex-row">
							<div class="quotes">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/quotes.png" alt="">
							</div>
							<div class="cont-person">
								<div class="person-img shadow-5">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/person.png" alt="Person Photo">
								</div>
							</div>
							<div class="testimonial-text">
								<div class="test">
									<p>Super recomendadissimo, son geniales desde que llegue me ayudaron much con todos mis tramites mis dudas, a escoger mi escuela y todo, el staff es muy amigable super buena onda, los irlandeses son tan parecidos a los mexicanos que ya no me quiero regresar. Mas que una agencia se han convertido en muy buenos amigos en irlanda... Gracias Vamos English...</p>
								</div>
								
								<div class="cont-signature d-flex flex-row">
									<span>Noe Fernandez Islas, <small>Estudiante</small></span>
									<img class="align-self-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/stars.png" alt="">
								</div>
							</div>
						</div>
						<div class="testimonial d-flex flex-row">
							<div class="quotes">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/quotes.png" alt="">
							</div>
							<div class="cont-person">
								<div class="person-img shadow-5">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/person.png" alt="Person Photo">
								</div>
							</div>
							<div class="testimonial-text">
								<p>Super recomendadissimo, son geniales desde que llegue me ayudaron much con todos mis tramites mis dudas, a escoger mi escuela y todo, el staff es muy amigable super buena onda, los irlandeses son tan parecidos a los mexicanos que ya no me quiero regresar. Mas que una agencia se han convertido en muy buenos amigos en irlanda... Gracias Vamos English...</p>
								<div class="cont-signature d-flex flex-row">
									<span>Noe Fernandez Islas, <small>Estudiante</small></span>
									<img class="align-self-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/stars.png" alt="">
								</div>
							</div>
						</div>
						<div class="testimonial d-flex flex-row">
							<div class="quotes">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/quotes.png" alt="">
							</div>
							<div class="cont-person">
								<div class="person-img shadow-5">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/person.png" alt="Person Photo">
								</div>
							</div>
							<div class="testimonial-text">
								<p>Super recomendadissimo, son geniales desde que llegue me ayudaron much con todos mis tramites mis dudas, a escoger mi escuela y todo, el staff es muy amigable super buena onda, los irlandeses son tan parecidos a los mexicanos que ya no me quiero regresar. Mas que una agencia se han convertido en muy buenos amigos en irlanda... Gracias Vamos English...</p>
								<div class="cont-signature d-flex flex-row">
									<span>Noe Fernandez Islas, <small>Estudiante</small></span>
									<img class="align-self-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/stars.png" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<? get_footer(); ?>