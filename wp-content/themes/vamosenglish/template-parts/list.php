<div class="post animated a-down">
    <?php
    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;
    $cat_slug = $category[0]->slug;
    ?>				
    <?php if ( has_post_thumbnail() ) :?>
    <div class="post-thumbnail">            
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', array(
            'alt' => trim(strip_tags( $post->post_title )),
            'title' => trim(strip_tags( $post->post_title )), 
        )); ?>
        </a>
    </div>
    <?php endif; ?>
    <h3><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h3>
    <span><time><?php the_date(); ?></time> &bull; by  <?php the_author(); ?> | <a href="<?=home_url();?>/category/<?=$cat_slug?>"><?= $firstCategory?></a><small><?php comments_number( '0', '1', '%' ); ?></small> </span>
    
    <p><a href="<? the_permalink(); ?>"><?=excerpt(40) ?></a></p>
    <div class="cont-link-post d-flex justify-content-between">
        <a href="<? the_permalink(); ?>" class="link-post">Lee mas</a>
        <div class="addtoany-cont">
            <?= do_shortcode("[addtoany]")?>
        </div>            
    </div>
</div>