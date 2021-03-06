<?php
include_once TEMPLATEPATH . '/services/getPosts.php';

function postsDevelopers($number_posts,$options) {
	$codes = getPosts($number_posts, 'code');
	$items = 0;
	while ($codes->have_posts()) : $codes->the_post();
		$items+= 1;
	?>
	<div class="<?php echo isset($options['layout_class']) ? $options['layout_class'] : ''; ?>"
		style="<?php echo isset($options['float-right']) && $items > 2  ? 'float: right' : ''; ?>" >
		<div class="<?php echo isset($options['container_class']) ? $options['container_class'] : ''; ?>">
			<div class="<?php echo isset($options['inner_class']) ? $options['inner_class'] : ''; ?>">
				<h5 class="<?php echo $options['title_class']?>">
					<?php the_title(); ?>
				</h5>
				<?php
					if (get_field('video')) {
						echo '<div class="video-container">' .  get_field('video') . '</div>';
						echo "<a target='_blank' href=" . get_field('url_video') . " class='mt1 waves-effect waves-light btn red darken-4'><i class='fab fa-youtube'></i>&nbsp;Ver en YouTube</a>";
					} else if(get_field('snippet_principal')){
						the_field('snippet_principal');
					} else {
						the_post_thumbnail('', array('class' => 'responsive-img'));
					}
				?>
				<?php if ($options['has_short']) { ?>
				<p class="<?php echo $options['short_class'] ?>" >
					<?php the_field('descripcion_corta'); ?>
				</p>
				<?php } ?>

				<?php if ($options['has_content']) { ?>
				<div class="<?php echo $options['content_class'] ?>">
					<?php the_content(); ?>
				</div>
				<?php } ?>
			</div>
			<div class="<?php echo $options['actions_class']?>">
				<?php if ($options['more']) { ?>
					<a href="<?php the_permalink(); ?>" class="<?php echo isset($options['learnmore_class']) ? $options['learnmore_class'] : ''; ?>">
						Más <i class="fas fa-plus"></i>
					</a>
				<?php } ?>
				<?php	if (get_field('url_descarga')) { ?>
					<a target="_blank" href="<?php the_field('url_descarga'); ?>" class="tooltipped <?php echo isset($options['download_class']) ? $options['download_class'] : ''; ?>" data-position="bottom" data-tooltip="descargar">
						<i class="fas fa-download"></i>
					</a>
				<?php } ?>
				<?php if (get_field('url_demo')) { ?>
					<a target="_blank" href="<?php the_field('url_demo'); ?>" class="tooltipped <?php echo isset($options['demo_class']) ? $options['demo_class'] : ''; ?>" data-position="right" data-tooltip="demo">
						<i class="fas fa-external-link-alt"></i>
					</a>
				<?php } ?>
				
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
<?php return $codes; } ?>