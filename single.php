<?php
    include_once TEMPLATEPATH . '/content/part-postsDeveloper.php'; 
    include_once TEMPLATEPATH . '/content/part-postsBlog.php'; 
    include_once TEMPLATEPATH . '/content/part-postsTrabajo.php'; 
    get_header();
?>
<div class="card mt1 z-depth-2">
    <div class="card-content">
        <?php while(have_posts()): the_post(); ?>  
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>
<?php
    get_footer();
?> 