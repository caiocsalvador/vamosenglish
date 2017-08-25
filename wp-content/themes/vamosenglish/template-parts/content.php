<div class="post animated a-down">
    <?php
    $category = get_the_category();
    $firstCategory = $category[0]->cat_name;
    $cat_slug = $category[0]->slug; 
    ?>    
    <div class="single-thumb">
        <?php if ( has_post_thumbnail() ) :?>
            <?php the_post_thumbnail('large', array(
                'alt' => trim(strip_tags( $post->post_title )),
                'title' => trim(strip_tags( $post->post_title )), 
            )); ?>
        <?php endif; ?>
    </div>
    <span><time><?php the_date(); ?></time> &bull; by  <?php the_author(); ?> | <a href="<?=home_url();?>/category/<?=$cat_slug?>"><?= $firstCategory?></a></span>
    <?php the_content(); ?>
    <div class="cont-link-post d-flex justify-content-between">
        <div class="addtoany-cont">
            <?= do_shortcode("[addtoany]")?>
        </div>
    </div>
</div>