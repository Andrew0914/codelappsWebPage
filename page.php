<?php
    include_once TEMPLATEPATH . '/content/part-postsDeveloper.php'; 
    include_once TEMPLATEPATH . '/content/part-postsBlog.php'; 
    include_once TEMPLATEPATH . '/content/part-postsTrabajo.php'; 
    get_header();
?>        
<div class="card mt1 z-depth-2 animated fadeIn">
    <div class="card-content">
        <div class="container">
        <?php while(have_posts()): the_post(); ?>
            <h1 class="noto grey-text text-darken-1 mt0">
                <?php the_title(); ?>
            </h1>
            <?php the_content(); ?>
        <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
    get_footer();
?> 