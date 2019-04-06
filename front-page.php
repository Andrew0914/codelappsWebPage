<?php
get_header();
?>
<div class="card">
    <div class="card-content">
        <div class="row">
        <?php while(have_posts()): the_post(); ?>  
            <div class="col s12 m7">
                <?php the_content(); ?>
            </div>

            <div class="col s12 m5 center-align">
                <?php the_post_thumbnail('256px2',array('class' => 'responsive-img rounded animated zoomIn'))?>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</div>
<?php
get_footer();
?> 