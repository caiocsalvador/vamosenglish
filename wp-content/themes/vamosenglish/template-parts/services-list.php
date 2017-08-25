<div class="col-md-6">
    <div class="service animated a-down">
        <?php if ( has_post_thumbnail() ) :?>
        <div class="service-thumbnail">            
            <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full', array(
                'alt' => trim(strip_tags( $post->post_title )),
                'title' => trim(strip_tags( $post->post_title )), 
                )); ?>
            </a>
        </div>
        <?php endif; ?>
        <h3><a href="#"><?php the_title(); ?></a></h3>
        <p><a href="#"><?=excerpt(15) ?></a></p>
    </div>
</div>