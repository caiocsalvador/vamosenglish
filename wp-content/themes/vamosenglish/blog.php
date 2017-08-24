<?php 
/*
	Template Name: Blog
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
                <li><a href="#">Home</a></li>
                <li class="active"><a href="#">Blog</a></li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="posts-list">
                        <? $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                        <?php
                            $args = array(
                                'posts_per_page' => 10,
                                'paged' => $paged
                            );
                        ?>
                        <? $query = new WP_Query($args);?>
                        <? if ( $query->have_posts() ): ?>
                            <? while ( $query->have_posts() ) : $query->the_post()?>
                                <?php get_template_part('template-parts/content', get_post_format()); ?>
                            <? endwhile; ?>
                        <? endif; ?>

                        <div class="pagination justify-content-center">
                            <?php 
                            if($query->max_num_pages > 5 ){
                                $num = 5;
                            }
                            else{
                                $num = $query->max_num_pages;
                            }
                            ?>
                            <?php 
                                echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $num,
                                    'current'      => max( 1, get_query_var( 'paged' ) ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'list',
                                    'end_size'     => 2,
                                    'mid_size'     => 1,
                                    'prev_next'    => false,
                                    'add_args'     => false,
                                    'add_fragment' => '',
                                ) );
                            ?>
                        </div>
                        <?php wp_reset_postdata(); ?>
                    </div>                    
                </div>
                <div class="col-md-4">
                    <div id="sidebar">
                        <? get_sidebar("blog"); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
<? get_footer(); ?>