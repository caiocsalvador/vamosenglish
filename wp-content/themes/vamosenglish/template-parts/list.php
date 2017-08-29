<article class="post animated a-down">
    <?php
    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;
    $cat_slug = $category[0]->slug;
    ?>				
    <? $featured_image_url = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ); ?>
    <?php if  ( ! empty( $featured_image_url ) ) :?>
    <div class="post-thumbnail">            
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('large', array(
            'alt' => trim(strip_tags( $post->post_title )),
            'title' => trim(strip_tags( $post->post_title )), 
        )); ?>
        </a>
    </div>
    <?php endif; ?>
    <h3><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h3>
    <div class="d-flex mb-3">
        <div class="avatar">
            <?php echo get_avatar( get_the_author_meta( 'ID' ), 36 ); ?>
        </div>
        <div class="meta-post">
            <span>Postado <strong><time><?php the_date(); ?></time></strong></span>
            <span>Por <strong><?php the_author(); ?></strong></span>
            <span>Em <strong><a href="<?=home_url();?>/category/<?=$cat_slug?>"><?= $firstCategory?></a></strong></span>
        </div>
    </div>
    <p><a href="<? the_permalink(); ?>"><?=excerpt(40) ?></a></p>
    <div class="cont-link-post d-flex justify-content-between">
        <a href="<? the_permalink(); ?>" class="link-post">Lee mas</a>
        <div class="addtoany-cont d-flex">
            <p class="share-label"><?= do_shortcode("[addtoany]")?></p>            
        </div>            
    </div>
</article>