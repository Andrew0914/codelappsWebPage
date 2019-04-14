<aside class="grey-text text-lighten-4 roboto">
    <?php 
        $acercade = new WP_Query('page_id=19');
        while($acercade->have_posts()): $acercade->the_post();
            the_excerpt();
    ?>
    <br>
    <a class="mt1 waves-effect waves-light btn light-blue darken-3" href="<?php the_permalink(); ?>">
        Más <i class="fa fa-plus"></i>
    </a>
    <?php
        endwhile; 
        wp_reset_postdata();
    ?>
    <!-- navegacion a redes -->
    <?php
        // argumentos para desplegar el menu
        $args= array(
            "theme_location"=> "redes-sociales",
            "container"=> "div",
            "container_class"=>"redes-sociales mt1"
        );

        // imprime el menu
        wp_nav_menu($args);
    ?>
</aside>