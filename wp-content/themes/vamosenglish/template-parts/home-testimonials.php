<div class="testimonial d-flex flex-row">
    <div class="quotes">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/quotes.png" alt="">
    </div>
    <div class="cont-person">
        <div class="person-img shadow-5">
            <?php the_post_thumbnail("small"); ?>
        </div>
    </div>
    <div class="testimonial-text">
        <div class="test">
            <?php the_content(); ?>
        </div>
        
        <div class="cont-signature d-flex flex-row">
            <span><?php the_title(); ?>, <small><?= excerpt(10); ?></small></span>
            <img class="align-self-center" src="<?php echo get_template_directory_uri(); ?>/assets/img/stars.png" alt="">
        </div>
    </div>
</div>