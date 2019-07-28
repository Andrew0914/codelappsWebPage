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
    <div class="card-action">
        <?php if (get_field('enlace')) { ?>
            <a href="<?php the_field('enlace'); ?>" class="tooltipped <?php echo isset($options['enlace_class']) ? $options['enlace_class'] : ''; ?>" data-position="right" data-tooltip="demo">
                <b>Ver en vivo &nbsp;<i class="fas fa-external-link-alt"></i></b>
            </a>
        <?php } ?>
        <?php	if (get_field('url_descarga')) { ?>
            <a href="<?php the_field('url_descarga'); ?>" class="tooltipped <?php echo isset($options['download_class']) ? $options['download_class'] : ''; ?>" data-position="bottom" data-tooltip="descargar">
               <b>Descargar&nbsp;<i class="fas fa-download"></i></b>
            </a>
        <?php } ?>
        <?php if (get_field('url_demo')) { ?>
            <a href="<?php the_field('url_demo'); ?>" class="tooltipped <?php echo isset($options['demo_class']) ? $options['demo_class'] : ''; ?>" data-position="right" data-tooltip="demo">
            <b>Demostración &nbsp;<i class="fas fa-external-link-alt"></i></b>
            </a>
        <?php } ?>
    </div>
</div>
<?php
    get_footer();
?> 