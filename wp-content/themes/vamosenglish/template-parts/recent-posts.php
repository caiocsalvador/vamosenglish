<div class="post d-flex flex-row animated a-down">	
    <?php if ( has_post_thumbnail() ) :?>
    <div class="img-recent-post">            
        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumb', array(
            'alt' => trim(strip_tags( $post->post_title )),
            'title' => trim(strip_tags( $post->post_title )), 
            )); ?>
        </a>
    </div>
    <?php endif; ?>
    <div class="info-post">
        <h5><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h5>
        <span><time><?php the_date(); ?></time> &bull; by  <?php the_author(); ?> </span>
    </div>
</div>