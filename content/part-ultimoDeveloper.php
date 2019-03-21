<div class="white-text">
    <h5 class='indigo-text'>
        Último Developer 
    </h5>
    <?php
        // query ultimo trabajo
        $args = array(
            'post_type'=> 'code',
            'posts_per_page' => 1,
            'order'=>'DESC',
            'orderby'=> 'date'
        );

        $codes = new WP_Query($args);
        while($codes->have_posts()): $codes->the_post();
    ?>
    <!-- ULTIMO TRABAMO -->
    <article>
        <h5>
            <?php the_title(); ?>
        </h5>
        <?php
            if( get_field('video') ){
                echo '<div class="video-container">' .  get_field('video') . '</div>';
                echo "<a href=". get_field('url_video') ." class='mt1 waves-effect waves-light btn red darken-4'><i class='fab fa-youtube'></i> Mirar el video</a>";
            }else {
                the_post_thumbnail( '' , array('class' => 'responsive-img'));
            }
        ?>
        <?php
            
        ?>

        <p><?php the_field('descripcion_corta');?></p>

        <a href="<?php the_permalink(); ?>" class="mt1 waves-effect waves-light btn deep-purple darken-2" >
            Más
        </a>
        <!-- enlace al demo -->
        <?php
            if( get_field('url_demo') ) {
        ?>
        <a href="<?php the_field('url_demo'); ?>" class="mt1 waves-effect waves-light btn deep-purple darken-4" >
            Ver Demo
        </a>
        <?php } ?>

        <!-- enlace a la descarga -->
        <?php
            if( get_field('url_descarga') ) {
        ?>
        <a href="<?php the_field('url_descarga'); ?>" class="mt1 waves-effect waves-light btn teal darken-4" >
            Descargar
        </a>
        <?php } ?>

    </article>
    <!-- /row de portafolio -->
    <?php  endwhile; wp_reset_postdata(); ?>
    <!-- aqui-->
</div>