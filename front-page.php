<?php
    include_once TEMPLATEPATH . '/content/part-postsDeveloper.php'; 
    include_once TEMPLATEPATH . '/content/part-postsBlog.php'; 
    include_once TEMPLATEPATH . '/content/part-postsTrabajo.php'; 
    get_header();
?>
<div class="card mt1 z-depth-2">
    <div class="card-content">
        <div class="row">
        <?php while(have_posts()): the_post(); ?>  
            <div class="col s12 m7">
                <?php the_content(); ?>
            </div>
            <div class="col s12 m5 center-align">
                <?php the_post_thumbnail('256px2',array('class' => 'responsive-img rounded animated zoomIn'))?>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- ULTIMO DEVELOPER -->
<h3 class="grey-text text-darken-2 noto">
    Developer
</h3>
<div class="row">
    <?php
        postsDevelopers(4,[
            'main_class' => 'card col l6 m6 s12 z-depth-2',
            'inner_class' => 'card-content',
            'title_class' =>'card_title noto',
            'actions_class' => 'card-action',
            'has_short' => true,
            'short_class' => 'mt1 roboto',
            'has_content' => false,
            'more'=>'true',
        ]);
    ?>
</div>
<!-- ULTIMOS BLOG -->
<h3 class="grey-text text-darken-2 noto">
    Blog
</h3>
<div class="row">
    <?php
        postsBlog(4,[
            'layout_class' => 'col l3 m3 s12 ',
            'container_class' => 'card z-depth-2 grey darken-4',
            'inner_class' => 'card-content white-text',
            'title_class' =>'card_title activator noto',
            'content_class' => 'roboto',
            'actions' => true,
            'reveal' => true,
            'actions_class' => 'card-action',
            'excerpt' => true,
        ]);
    ?>
</div>

<!-- ultimo trabajo -->
<h3 class="grey-text text-darken-2 noto">
    Portafolio
</h3>
<div class="row">
    <?php
            postsTrabajo(3,[
                'main_class' => 'card col l4 m4 s12 z-depth-2',
                'inner_class' => 'card-content',
                'title_class' =>'card_title noto',
                'actions_class' => 'card-action',
                'has_short' => true,
                'short_class' => 'mt1 roboto',
                'has_content' => false,
                'more'=>'true'
            ]);
    ?> 
</div> 
<?php
    get_footer();
?> 