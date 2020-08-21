<div class="col s12 mt2 animated pulse">
    <?php
    $last_new = getPosts(1, array('code', 'post', 'trabajo'));
    while ($last_new->have_posts()) : $last_new->the_post();
    ?>
        <div class="card horizontal indigo darken-4">
            <div class="card-image">
                <?php the_post_thumbnail('medium'); ?>
            </div>
            <div class="card-stacked">
                <div class="card-content white-text">

                    <h4>
                        <i class="fas fa-star yellow-text"></i>
                        <?php the_title(); ?>
                    </h4>

                    <p> <?php the_excerpt(); ?> </p>
                </div>
                <div class="card-action">
                    <a href="<?php the_permalink(); ?>" class='white-text'>Ver publicación</a>
                </div>
            </div>
        </div>
    <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>