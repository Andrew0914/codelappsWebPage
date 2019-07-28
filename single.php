<?php
    get_header();
?>
<div class="row">
    <div class="col s12">
<?php while(have_posts()): the_post(); ?>  
<div class="card mt1 z-depth-2">
    <div class="card-content">
        <!-- TITLE -->
        <span class="card-title">
            <b><?php the_title(); ?></b>

            <?php if( get_field('tipo_desarrollo') ){ ?>
            <div class="chip big-text">
                <small>
                    <?php the_field('tipo_desarrollo'); ?>
                </small>
            </div>
            <?php } ?>

        </span>
        <!-- CONTENT -->
        <?php the_content(); ?>
        <!-- ACTIONS -->
        <div class="card-action">
            <?php if (get_field('enlace')) { ?>
                <a href="<?php the_field('enlace'); ?>" class="tooltipped" data-position="bottom" data-tooltip="demo">
                    <b>Ver en vivo &nbsp;<i class="fas fa-external-link-alt"></i></b>
                </a>
            <?php } ?>
            <?php	if (get_field('url_descarga')) { ?>
                <a href="<?php the_field('url_descarga'); ?>" class="tooltipped" data-position="top" data-tooltip="descargar">
                <b>Descargar&nbsp;<i class="fas fa-download"></i></b>
                </a>
            <?php } ?>
            <?php if (get_field('url_demo')) { ?>
                <a href="<?php the_field('url_demo'); ?>" class="tooltipped" data-position="bottom" data-tooltip="demo">
                    <b>Demostración &nbsp;<i class="fas fa-external-link-alt"></i></b>
                </a>
            <?php } ?>
            <?php if (get_field('url_video')) { ?>
                <a href="<?php the_field('url_video'); ?>" class="tooltipped" data-position="bottom" data-tooltip="demo">
                    <b>Ver en Youtube &nbsp;<i class="fab fa-youtube"></i></b>
                </a>
            <?php } ?>
        </div>
    </div>
</div>

 <!-- CATEGORIES -->
 <nav>
    <div class="nav-wrapper z-depth-2 mb1 blue-grey darken-3">
        <div class="col s12"> 
            <?php
                $post_categories = wp_get_post_categories( get_the_ID() );
                foreach($post_categories as $categoryId){
                    $category = get_category( $categoryId );
            ?>
            <a href="/<?php echo $category->slug; ?>" class="breadcrumb roboto"><b><?php echo $category->name; ?></b></a>
            <?php } ?>
        </div>
    </div>
</nav>

<?php endwhile; ?>

    </div>
</div>

<?php
    get_footer();
?> 