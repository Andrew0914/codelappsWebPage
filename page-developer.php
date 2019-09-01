<?php
    include_once TEMPLATEPATH . '/content/part-postsDeveloper.php';
    include_once TEMPLATEPATH . '/content/pagination.php';
    get_header();
?>     
<!-- MAIN -->   
<div class="row animated fadeIn">

    <div class="col s12 center-align">
        <?php while(have_posts()): the_post(); ?>
            <h2 class="noto"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

</div>

<!-- developer posts -->
<div class="row animated fadeIn">
    <?php
        $return_posts = postsDevelopers(6,[
            'layout_class' => 'col l6 m6 s12',
            'container_class' => 'card z-depth-2',
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
<!-- PAGINATION -->
<div class="row mt2 mb2">
    <div class="col s12 center-align">
        <?php
            paginate($return_posts);
        ?>
    </div>
</div>

<?php
    get_footer();
?> 