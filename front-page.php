<?php
include_once TEMPLATEPATH . '/content/part-postsDeveloper.php';
include_once TEMPLATEPATH . '/content/part-postsBlog.php';
include_once TEMPLATEPATH . '/content/part-postsTrabajo.php';
get_header();
?>



<!-- HOME CONTENT-->

<div class="row mt1 mb5 animated fadeIn">
  <?php while (have_posts()) : the_post(); ?>
    <div class="col s12 center-align">
      <?php the_content(); ?>
    </div>
  <?php endwhile; ?>
</div>


<!-- LAST NEW -->
<?php
get_template_part('content/part', 'lastNew');
?>

<!-- ULTIMO DEVELOPER -->
<h3 class="grey-text text-darken-2 noto">
  Developer
</h3>
<div class="row">
  <?php
  postsDevelopers(4, [
    'layout_class' => 'col l6 m6 s12',
    'container_class' => 'card z-depth-2',
    'inner_class' => 'card-content',
    'title_class' => 'card_title noto',
    'actions_class' => 'card-action',
    'has_short' => true,
    'short_class' => 'mt1 roboto',
    'has_content' => false,
    'more' => 'true',
    'float-right' => true
  ]);
  ?>
</div>

<!-- ultimo trabajo -->
<h3 class="grey-text text-darken-2 noto">
  Portafolio
</h3>
<div class="row">
  <?php
  postsTrabajo(3, [
    'layout_class' => 'col l4 m4 s12',
    'container_class' => 'card z-depth-2',
    'inner_class' => 'card-content',
    'title_class' => 'card_title noto',
    'actions_class' => 'card-action',
    'has_short' => true,
    'short_class' => 'mt1 roboto',
    'has_content' => false,
    'more' => 'true'
  ]);
  ?>
</div>

<!-- ULTIMOS BLOG -->
<h3 class="grey-text text-darken-2 noto">
  Blog
</h3>
<div class="row">
  <?php
  postsBlog(4, [
    'layout_class' => 'col l3 m3 s12 ',
    'container_class' => 'card z-depth-2 grey darken-4',
    'inner_class' => 'card-content white-text',
    'title_class' => 'card_title activator noto',
    'content_class' => 'roboto',
    'actions' => true,
    'reveal' => true,
    'actions_class' => 'card-action',
    'excerpt' => true,
  ]);
  ?>
</div>


<?php
get_footer();
?>