<?php
    get_header();
?>        
<div class="card mt1 z-depth-2 animated fadeIn">
    <div class="card-content">
        <?php while(have_posts()): the_post(); ?>
            <div class="card-title noto grey-text text-darken-1">
                <h2><?php the_title(); ?></h2>
            </div>
            <?php the_content(); ?>
        <?php endwhile; ?>
        <!-- COURSES -->
    </div>
</div>
<?php
    get_footer();
?> 