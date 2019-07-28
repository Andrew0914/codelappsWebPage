<?php
    include_once TEMPLATEPATH . '/content/part-postsBlog.php';
    include_once TEMPLATEPATH . '/content/pagination.php';
    get_header();
?>     
<!-- MAIN -->   
<div class="row fadeIn">

    <div class="col s12 center-align">
        <?php while(have_posts()): the_post(); ?>
            <h2 class="noto"><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; ?>
    </div>

</div>

<!-- BLOG posts -->
<div class="row">
    <?php

        $return_posts = postsBlog(12,[
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