<? get_header(); ?>

<main role="main">
    <section id="inner">
        <div class="inner-bg"></div>
        <div class="container">
            <? $page_title = $wp_query->post->post_title; ?>
            <h1 class="title text-left"><?=$page_title?></h1>
            <ul class="breadcumb">
				<li><a href="<?=home_url();?>">Home</a></li>
				<li><a href="<?=home_url();?>/blog">Blog</a></li>
                <li class="active"><?=$page_title?></li>
            </ul>
            <div class="row">
                <div class="col-md-8">
                    <div class="posts-list">
                        <? $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1; ?>
                        <? if ( have_posts() ): ?>
                            <? while ( have_posts() ) : the_post()?>
                                <?php get_template_part('template-parts/list', get_post_format()); ?>
                            <? endwhile; ?>
                        <? endif; ?>

                        <div class="pagination justify-content-center">
                            <?php 
								global $wp_query;
                                echo paginate_links( array(
                                    'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
                                    'total'        => $wp_query->max_num_pages,
                                    'current'      => max( 1, get_query_var( 'paged' ) ),
                                    'format'       => '?paged=%#%',
                                    'show_all'     => false,
                                    'type'         => 'list',
                                    'end_size'     => 0,
                                    'mid_size'     => 3,
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