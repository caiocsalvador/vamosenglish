<?php
/*
	Template Name: Schools
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
                <li class="active"><?=$page_title?></li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="single">
                    <? if(have_posts()): ?>
                        <? while(have_posts()): the_post(); ?>
                        <?php the_content(); ?>
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th class="border blue bg-gray" colspan="3">CURSO DE VERANO</th>
                                    <th class="border blue bg-gray" colspan="3">ESTUDAR Y TRABAJAR</th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th class="border black">Junior</th>
                                    <th class="border black">Adult</th>
                                    <th class="border black">Cambridge</th>
                                    <th class="border black">Cambridge</th>
                                    <th class="border black">IELTS</th>
                                    <th class="border black">General <br>English</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" class="border blue text-right"><a href="<?=home_url()?>/schools/castleforbes-college">Castleforbes College</a></th>
                                    <td class="border"></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="border blue text-right"><a href="<?=home_url()?>/schools/glenstal-abbey-school">Glenstal Abbey School</a></th>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="border blue text-right"><a href="<?=home_url()?>/schools/delfin-english-school">Delfin english school</a></th>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="border blue text-right"><a href="<?=home_url()?>/schools/irish-college-english">Irish college of english</a></th>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="border blue text-right"><a href="<?=home_url()?>/schools/isi-dublin">Isi Dublin</a></th>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                </tr>
                                <tr>
                                    <th scope="row" class="border blue text-right"><a href="<?=home_url()?>/schools/ibat">IBAT</a></th>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                    <td class="border"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/check.png" alt=""></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="cont-link-post">
                            <div class="addtoany-cont d-flex align-content-between align-items-center">
                                <a href="<?= home_url() ?>" class="back-home">HOME</a>
                                <p class="share-label text-right">Compartir: <?= do_shortcode("[addtoany]")?></p>            
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
