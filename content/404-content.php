
<?php
    include_once TEMPLATEPATH . '/services/getPosts.php'; 
?>
<!-- LAST NEW -->
<div class="row" id="last-new">
    <div class="col s12">
        <div class="card light-blue lighten-1">
            <div class="card-content white-text big-text roboto ">
                <?php
                    $last_new = getPosts(1, array('code','post','trabajo'));
                    while ($last_new->have_posts()) : $last_new->the_post();
                ?>
                <i class="fas fa-star"></i> Publicación reciente: <b><?php the_title(); ?> <a href="<?php the_permalink(); ?>" class='blue-text text-darken-4'><u>Ver publicación</u></a></b>
                <?php endwhile; wp_reset_postdata(); ?>
                <i class="fas fa-times right btn-close" onclick="closeThis($('#last-new'))"></i>
            </div>
        </div>
    </div>
</div>

<div class="row animated fadeIn">
    <div class="col s12 center-align">
        <h1 class="grey-text text-darken-3">
            Sin Resultados
        </h1>
        <h1 class="grey-text text-darken-3">
            <b>404</b>
        </h1>
        <h3 class="grey-text text-darken-2">
            Prueba buscando otra cosa 
            <br>
            <i class="far fa-sad-cry"></i>
        </h3>
    </div>
</div>
