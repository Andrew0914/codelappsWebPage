<div class="white-text">
    <h5>
        Último trabajo 
    </h5>
    <?php
        // query ultimo trabajo
        $args = array(
            'post_type'=> 'trabajo',
            'posts_per_page' => 1,
            'order'=>'DESC',
            'orderby'=> 'date'
        );

        $trabajos = new WP_Query($args);
        while($trabajos->have_posts()): $trabajos->the_post();
    ?>
    <!-- ULTIMO TRABAMO -->
    <article>
        <h5>
            <?php the_title(); ?>
        </h5>
        <h6>
            <?php the_field('tipo_desarrollo'); ?>
        </h6>
        <?php
            the_post_thumbnail( '' , array('class' => 'responsive-img'));
        ?>
        <p><?php the_field('descripcion_corta');?></p>
        <a href="<?php the_permalink(); ?>" class="mt1 waves-effect waves-light btn purple darken-2" >
            Saber más
        </a>
        <?php
            if( get_field('enlace') ) {
        ?>
        <a href="<?php the_field('enlace'); ?>" class="mt1 waves-effect waves-light btn purple darken-4" >
            Ver proyecto
        </a>
        <?php } ?>
    </article>
    <!-- /row de portafolio -->
    <?php  endwhile; wp_reset_postdata(); ?>
    <!-- aqui-->
</div>