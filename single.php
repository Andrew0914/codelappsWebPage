<?php
    get_header();
?>
<div class="card mt1 z-depth-2">
    <div class="card-content">
        <?php while(have_posts()): the_post(); ?>  
            <span class="card-title">
                <b><?php the_title(); ?></b>
            </span>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>
</div>
<?php
    get_footer();
?> 