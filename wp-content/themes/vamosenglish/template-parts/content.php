<div class="post animated a-down">
    <?php
    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;
    $cat_slug = $category[0]->slug; 
    ?>    
    <!--<div class="single-thumb">
        <?php /*if ( has_post_thumbnail() ) :?>
            <?php the_post_thumbnail('large', array(
                'alt' => trim(strip_tags( $post->post_title )),
                'title' => trim(strip_tags( $post->post_title )), 
            )); ?>
        <?php endif;*/ ?>
    </div>-->
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
    <?php the_content(); ?>
    <div class="cont-link-post">
        <div class="addtoany-cont d-flex align-content-between">
            <a href="<?= home_url() ?>" class="back-home">HOME</a>
            <p class="share-label text-right">Compartir: <?= do_shortcode("[addtoany]")?></p>            
        </div> 
    </div>
</div>