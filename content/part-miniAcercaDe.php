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
    <a class="mt1 waves-effect waves-light btn purple darken-4" href="<?php the_permalink(); ?>">Saber más</a>
    <?php
        endwhile; 
        wp_reset_postdata();
    ?>
</aside>