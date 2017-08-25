<div class="post animated a-down">
<?php
$category = get_the_category();
$firstCategory = $category[0]->cat_name;
$cat_slug = $category[0]->slug; 
?>
<?php the_content(); ?>
</div>