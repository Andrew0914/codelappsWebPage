<?php
get_header();

?>

<?php while (have_posts()) : the_post(); $author_id = get_the_author_meta( 'ID' );?>
  <div class="card mt1 z-depth-2 animated fadeIn">
    <div class="card-content">

      <!-- TITLE -->
      <div class="row">
        <div class="col s12">
          <span class="card-title">
            <div class="row">
              <div class="col m10 s12">
                <h3><?php the_title(); ?></h3>
                <div class="author">
                  <img src="<?php echo get_avatar_url($author_id);?>" alt="" width="48" height="48">
                  <div class="author_info">
                    <a class="roboto indigo-text text-darken-3 normal-text" target="_blank" href="https://twitter.com/Andrew_GMx">
                      <?php 
                        $author_name= get_the_author_meta( 'display_name', $author_id );
                        echo $author_name ? $author_name : "Andrew Gonzalez" ?>
                    </a>
                    <span class="roboto grey-text text-darken-2 small-text">
                      <?php echo get_the_date(); ?>
                    </span>
                  </div>
                </div>
                <?php if (get_field('tipo_desarrollo')) { ?>
                  <div class="chip chip-sm big-text">
                    <small>
                      <?php the_field('tipo_desarrollo'); ?>
                    </small>
                  </div>
                <?php } ?>
              </div>
              <div class="col m2 s12">
                <?php the_post_thumbnail('', ['class' => 'responsive-img materialboxed']) ?>
              </div>
            </div>
          </span>
        </div>
      </div>

      <!-- CONTENT -->
      <div class="row">
        <div class="col s12">
          <?php the_content(); ?>
        </div>
      </div>

      <!-- CODE -->
      <div class="row">
        <div class="col s12">
          <?php
          if (get_field('snippet_principal')) {
            echo '<h5 class="noto" name="snippet_principal">Code:</h5>';
            echo  get_field('snippet_principal');
          }
          ?>
        </div>
      </div>

      <!-- VIDEO -->
      <div class="row">
        <div class="col s12 m8">
          <?php
          if (get_field('video')) {
            echo '<h5 class="noto" name="video">Video:</h5>';
            echo '<div class="video-container">' .  get_field('video') . '</div>';
          }
          ?>
        </div>
      </div>

    </div>

    <!-- ACTIONS -->
    <div class="card-action">
      <?php if (get_field('enlace')) { ?>
        <a href="<?php the_field('enlace'); ?>" class="tooltipped" data-position="bottom" data-tooltip="demo">
          <b>Ver en vivo &nbsp;<i class="fas fa-external-link-alt"></i></b>
        </a>
      <?php } ?>
      <?php if (get_field('url_descarga')) { ?>
        <a href="<?php the_field('url_descarga'); ?>" class="tooltipped" data-position="top" data-tooltip="descargar">
          <b>Descargar&nbsp;<i class="fas fa-download"></i></b>
        </a>
      <?php } ?>
      <?php if (get_field('url_demo')) { ?>
        <a href="<?php the_field('url_demo'); ?>" class="tooltipped" data-position="bottom" data-tooltip="demo">
          <b>Demostración &nbsp;<i class="fas fa-external-link-alt"></i></b>
        </a>
      <?php } ?>
      <?php if (get_field('url_video')) { ?>
        <a href="<?php the_field('url_video'); ?>" class="tooltipped" data-position="bottom" data-tooltip="demo">
          <b>Ver en Youtube &nbsp;<i class="fab fa-youtube"></i></b>
        </a>
      <?php } ?>
    </div>
  </div>

  <!--SOCIAL NETWORKS -->
  <h4 class="noto mt3 big-text">Ayudame a compartir este post</h4>
  <div class="row mt1 pl0">
    <div class="col m2 s12 pl0 mt1">
      <div class="fb-share-button" data-href="<?php echo get_the_permalink() ?>" data-layout="button_count" data-size="large">
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fcodelapps.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">
          Compartir
        </a>
      </div>
      <div class="fb-like mt03" data-href="https://www.facebook.com/AndrewGMx/" data-width="" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="false"></div>
    </div>
    <div class="col m3 s12 pl0 mt1">
      <?php
      $tags = "";
      foreach (get_the_tags(get_the_ID()) as $tag) {
        $tags .= $tag->slug . ',';
      }
      ?>
      <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-size="large" data-text="<?php echo get_the_title(); ?>" data-url="<?php echo get_the_permalink(); ?>" data-hashtags="<?php echo $tags; ?>" data-show-count="true">
        Tweet
      </a>
      <a href="https://twitter.com/Andrew_GMx?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="true" data-size="large">Follow @Andrew_GMx</a>
    </div>
  </div>

  <!-- CATEGORIES -->
  <h4 class="big-text">
    Categories
  </h4>
  <nav class="row">
    <div class="nav-wrapper z-depth-2 mb1 blue-grey darken-3">
      <div class="col s12">
        <?php
        $post_categories = wp_get_post_categories(get_the_ID());
        foreach ($post_categories as $categoryId) {
          $category = get_category($categoryId);
        ?>
          <a href="/category/<?php echo $category->slug; ?>" class="breadcrumb teal-text text-accent-3 roboto"><b><?php echo $category->name; ?></b></a>
        <?php } ?>
      </div>
    </div>
  </nav>

  <div class="row">
    <h4 class="big-text">
      Tags
    </h4>
    <?php echo wpb_tags(get_the_ID()); ?>
  </div>


<?php endwhile; ?>
<?php
get_footer();
?>