<h5 class="indigo-text">
    Acerca de 
</h5>
<aside class="grey-text text-lighten-4">
    <?php 
        $acercade = new WP_Query('page_id=19');
        while($acercade->have_posts()): $acercade->the_post();
            the_excerpt();
    ?>
    <br>
    <a class="mt1 waves-effect waves-light btn deep-purple darken-4" href="<?php the_permalink(); ?>">Saber más</a>
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