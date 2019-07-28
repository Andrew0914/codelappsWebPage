<?php
include_once TEMPLATEPATH . '/services/getPosts.php';

function postsTrabajo($number_posts,$options) {
	$trabajos = getPosts($number_posts, 'trabajo');
	while ($trabajos->have_posts()) : $trabajos->the_post();
	?>
	<div class="<?php echo isset($options['layout_class']) ? $options['layout_class'] : ''; ?>">
		<div class="<?php echo isset($options['container_class']) ? $options['container_class'] : ''; ?>">
			<div class="<?php echo isset($options['inner_class']) ? $options['inner_class'] : ''; ?>">
				<h5 class="<?php echo $options['title_class']?> card-title mt0">
					<b><?php the_title(); ?></b>
				</h5>
				<div class="chip chip-sm">
					<small>
						<?php the_field('tipo_desarrollo'); ?>
					</small>
				</div>
				<?php
					if (get_field('video')) {
						echo '<div class="video-container">' .  get_field('video') . '</div>';
						echo "<a href=" . get_field('url_video') . " class='mt1 waves-effect waves-light btn red darken-4'><i class='fab fa-youtube'></i> Mirar el video</a>";
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
				
				<?php if (get_field('enlace')) { ?>
					<a href="<?php the_field('enlace'); ?>" class="tooltipped <?php echo isset($options['enlace_class']) ? $options['enlace_class'] : ''; ?>" data-position="right" data-tooltip="demo">
						<i class="fas fa-external-link-alt"></i>
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
<?php return $trabajos; } ?>