<?php
    get_header();
?>

<?php while(have_posts()): the_post(); ?>  
<div class="card mt1 z-depth-2">
    <div class="card-content">

        <!-- TITLE -->
        <div class="row">
            <div class="col s12">                
                <span class="card-title">
                    <div class="row">
                        <div class="col m10 s12">
                            <h3><?php the_title(); ?></h3>
                            <?php if( get_field('tipo_desarrollo') ){ ?>
                            <div class="chip chip-sm big-text">
                                <small>
                                    <?php the_field('tipo_desarrollo'); ?>
                                </small>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="col m2 s12">
                            <?php the_post_thumbnail('' ,['class' => 'responsive-img materialboxed'])?>
                        </div>
                    </div>
                </span>
            </div>
        </div>

        <!-- CONTENT -->
        <div class="row">
            <div class="col s12">
                <?php the_content(); ?>
            </div>
        </div>
        
        <!-- CODE -->
        <div class="row">
            <div class="col s12">
            <?php
                if (get_field('snippet_principal')) {
                    echo '<h5 class="noto" name="snippet_principal">Code:</h5>';
                    echo  get_field('snippet_principal');
                }
            ?>
            </div>
        </div>

        <!-- VIDEO -->
        <div class="row">
            <div class="col s12 m8">
            <?php
                if (get_field('video')) {
                    echo '<h5 class="noto" name="video">Video:</h5>';
                    echo '<div class="video-container">' .  get_field('video') . '</div>';
                }
            ?>
            </div>
        </div>

        <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink(); ?>">Facebook</a>
       
    </div>

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

 <!-- CATEGORIES -->
 <h4 class="big-text">
    Categories:
</h4>
 <nav class="row">
    <div class="nav-wrapper z-depth-2 mb1 blue-grey darken-3">
        <div class="col s12"> 
            <?php
                $post_categories = wp_get_post_categories( get_the_ID() );
                foreach($post_categories as $categoryId){
                    $category = get_category( $categoryId );
            ?>
            <a href="/category/<?php echo $category->slug; ?>" class="breadcrumb roboto"><b><?php echo $category->name; ?></b></a>
            <?php } ?>
        </div>
    </div>
</nav>

<div class="row">
    <h4 class="big-text">
        Tags:
    </h4>
    <?php echo wpb_tags(get_the_ID()); ?>
</div>


<?php  endwhile; ?>
<?php
    get_footer();
?> 