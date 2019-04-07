<?php
include_once TEMPLATEPATH . '/services/getPosts.php';

function postsDevelopers($number_posts,$options) {
	$codes = getPosts(1, 'code');
	while ($codes->have_posts()) : $codes->the_post();
	?>
	<div class="<?php echo $options['main_class'] ?>">
		<div class="<?php echo $options['inner_class']?>">
			<h5 class="<?php echo $options['title_class']?>">
				<?php the_title(); ?>
			</h5>
			<?php
				if (get_field('video')) {
					echo '<div class="video-container">' .  get_field('video') . '</div>';
					echo "<a href=" . get_field('url_video') . " class='mt1 waves-effect waves-light btn red darken-4'><i class='fab fa-youtube'></i> Mirar el video</a>";
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
			<a href="<?php the_permalink(); ?>" class="<?php echo $options['learnmore_class']?>">
				Más
			</a>
			<?php if (get_field('url_demo')) { ?>
				<a href="<?php the_field('url_demo'); ?>" class="<?php echo $options['demo_class']?>">
					Ver Demo <i class="fas fa-external-link-alt"></i>
				</a>
			<?php } ?>
			<?php	if (get_field('url_descarga')) { ?>
				<a href="<?php the_field('url_descarga'); ?>" class="<?php echo $options['download_class']?>">
					Descargar <i class="fas fa-download"></i>
				</a>
			<?php } ?>
		</div>
	</div>
	<?php endwhile; wp_reset_postdata(); ?>
<?php } ?>