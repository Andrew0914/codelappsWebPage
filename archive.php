<?php
include_once TEMPLATEPATH . '/content/pagination.php';
get_header();
global $wp_query;

?>
<div class="row">
<div class="col s12">
    <h4 class="noto">
        <?php the_archive_title(); ?>
    </h4>
</div>
<?php
while($wp_query->have_posts()) : the_post();
?>

    <div class="col s12 m3">
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
    get_footer();
?>