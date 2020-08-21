<?php
/*
Template Name: Search Page
*/
include_once TEMPLATEPATH . '/content/pagination.php';
get_header();
global $wp_query;
$total_results = $wp_query->found_posts;
if($total_results > 0){
?>
<div class="row">
    <div class="col s12">
        <h4 class="noto">
            Se encontraron ( <?php echo $total_results; ?> ) resultados para: <?php the_search_query(); ?>
        </h4>
    </div>
</div>
<div class="row">
<?php
while(have_posts()) : the_post();
?>

    <div class="col s12 m4">
        <div class="card">
            <?php the_post_thumbnail('', array('class' => 'responsive-img')); ?>
            <div class="card-content">
                <span class="card-title"><b><?php the_title(); ?></b></span>
                <div class="chip chip-sm">
					<b>
						<?php echo get_post_type(); ?>
                    </b>
				</div>
                <?php the_excerpt(); ?>
            </div>
            <div class="card-action">
                <a href="<?php the_permalink(); ?>">Saber mas &nbsp;<i class="fas fa-plus"></i> </a>
            </div>
        </div>
    </div>

<?php 
    endwhile; 
    wp_reset_postdata();
?>
</div>

<!-- PAGINATION -->
<div class="row mt2 mb2">
    <div class="col s12 center-align">
        <?php
            paginate($wp_query);
        ?>
    </div>
</div>
<?php
    } else {
        include_once TEMPLATEPATH . '/content/404-content.php';
    }
    get_footer();
?>