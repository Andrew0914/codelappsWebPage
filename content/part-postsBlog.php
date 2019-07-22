<?php
include_once TEMPLATEPATH . '/services/getPosts.php';

function postsBlog($number_posts,$options) {
    
    $posts = getPosts($number_posts, 'post');
    while ($posts->have_posts()) : $posts->the_post();
    
    ?>
    
    <div class="<?php echo $options['layout_class'] ?>">
        <div class="<?php echo $options['container_class']?>">
            <div class="<?php echo $options['inner_class']?>">
                <p>
                    <b>BLOG</b>
                </p>
                <h5 class="<?php echo $options['title_class']?>">
                    <?php the_title(); ?> <?php if( $options['reveal'] ){ ?> <i class="right fas fa-images cursor"></i><?php } ?>
                </h5>
                <div class="<?php echo $options['content_class'] ?>">
                    <?php $options['excerpt'] ? the_excerpt() : the_content(); ?>
                    <div class="chip mt1">
                        <img class="responsive-img logo" src="<?php echo get_template_directory_uri().'/images/andrew.png'; ?>" >
                        <?php the_author(); ?>
                    </div>
                    <p><small>12/09/2015</small></p>
                </div>
            </div>

            <?php if( $options['reveal'] ){ ?>
            <div class="card-reveal">
                <span class="card-title">
                    <?php the_title(); ?>  <i class="right fas fa-times"></i>
                </span>
                <?php the_post_thumbnail('', array('class' => 'responsive-img')); ?>
            </div>
            <?php } ?>


            <?php if( $options['actions'] ){ ?>
            <div class="<?php echo $options['actions_class']?>">
                <a href="<?php the_permalink(); ?>" class="<?php echo isset($options['learnmore_class']) ? $options['learnmore_class'] : ''; ?>">
                    Más <i class="fas fa-plus"></i>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
    
    <?php endwhile; wp_reset_postdata(); ?>
    
<?php } ?>