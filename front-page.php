<?php
    include_once TEMPLATEPATH . '/content/part-postsDeveloper.php'; 
    get_header();
?>
<div class="card">
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
<div class="row">
    <?php
        postsDevelopers(4,[
            'main_class' => 'card col l6 m6 s12 z-depth-2',
            'inner_class' => 'card-content',
            'title_class' =>'card_title noto',
            'actions_class' => 'card-action',
            'has_short' => true,
            'short_class' => 'mt2 roboto',
            'has_content' => false,
            'download_class' => 'pulse'
        ]);
    ?>
</div>
<?php
    get_footer();
?> 