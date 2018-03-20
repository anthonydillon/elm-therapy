<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ElmTherapy
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<main id="main-content" class="u-no-margin--top">
  <div class="p-strip is-deep u-image-position is-bordered">
    <div class="row">
      <div class="col-6">
        <?php $id=36; $post = get_page($id); echo wpautop($post->post_content);  ?>
      </div>
      <div class="col-6 u-hide--small">
        <img src="/wp-content/themes/elm-therapy/images/hero-image-2.jpg" alt="" class="u-image-position--bottom u-image-position--right" />
      </div>
    </div>
  </div>
  <div class="p-strip--light is-bordered" id="about">
    <div class="row">
      <div class="col-8">
        <?php $id=14; $post = get_page($id); echo wpautop($post->post_content);  ?>
      </div>
    </div>
    <div class="row">
      <div class="col-6 ticked-list">
        <?php $id=33; $post = get_page($id); echo wpautop($post->post_content);  ?>
      </div>
      <div class="col-6 ticked-list">
        <?php $id=34; $post = get_page($id); echo wpautop($post->post_content);  ?>
      </div>
    </div>
  </div>
  <div class="p-strip is-bordered is-shallow">
    <div class="row">
      <div class="col-12">
        <h2 class="p-muted-heading u-align--center">My accreditations</h2>
        <ul class="p-inline-images">
          <li class="p-inline-images__item">
            <img class="p-inline-images__logo" src="/wp-content/themes/elm-therapy/images/CThA-Medium.jpg" alt="CThA">
          </li>
          <li class="p-inline-images__item">
            <img class="p-inline-images__logo" src="/wp-content/themes/elm-therapy/images/itec.png" alt="ITEC">
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="p-strip--accent is-bordered is-light" id="treatments">
    <div class="row">
      <div class="col-8">
        <h2>Treatments</h2>
      </div>
    </div>
    <div class="row u-equal-height">
      <?php $args = array(
          'posts_per_page'   => 4,
          'offset'           => 0,
          'category'         => '',
          'category_name'    => '',
          'order'            => 'DESC',
          'include'          => '',
          'exclude'          => '',
          'meta_key'         => '',
          'meta_value'       => '',
          'post_type'        => 'treatments',
          'post_status'      => 'publish',
          'suppress_filters' => true
        );
        $posts_array = get_posts( $args );
        $i = 0;
        foreach ( $posts_array as $post ) : setup_postdata( $post );
          $i++;
          ?>
          <?php if( $i == 3 ) { ?>
            </div><div class="row u-equal-height">
          <?php } ?>

          <div class="p-card--highlighted col-6">
            <?php
              $duration = get_post_meta($post->ID, 'duration', true);
              $cost = get_post_meta($post->ID, 'cost', true);
            ?>
            <div class="p-card__header">
              <h4><?php the_title(); ?></h4>
              <p><?php echo $duration;	?></p>
            </div>
            <p><?php the_content(); ?></p>
            <p class="u-align--center p-heading--four"><?php echo $cost;	?></p>
            <p class="u-align--center"><a href="#contact" class="p-button">Contact to book</a></p>
          </div>
        <?php endforeach;
        wp_reset_postdata();?>
      </div>
    </div>
  </div>
  <div class="p-strip is-bordered" id="blog">
    <div class="row">
      <div class="col-8">
        <h2>Latest from the blog</h2>
      </div>
    </div>
    <div class="row p-divider">
    <?php
			if ( have_posts() ) :
        while ( have_posts() ) : the_post();
        ?>

        <div class="p-media-object col-4 p-divider__block">
          <div class="p-media-object__details">
            <h3 class="p-media-object__title">
              <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
            </h3>
            <p class="p-media-object__content"><?php the_excerpt() ?></p>
            <ul class="p-media-object__meta-list">
              <li class="p-media-object__meta-list-item">
                <span class="u-off-screen">Topic: </span>
                <?php
                  $posttags = get_the_tags();
                  $comma = '';
                  if ($posttags) {
                    foreach($posttags as $tag) {
                      echo $comma . $tag->name;
                      $comma = ', ';
                    }
                  }
                ?>
              </li>
              <li class="p-media-object__meta-list-item--date">
                <span class="u-off-screen">Date: </span><?php the_date() ?>
              </li>
            </ul>
          </div>
        </div>
    <?php
				endwhile;
			endif;
    ?>
      </div>
      <div class="row">
        <!-- <a href="" class="p-button--brand">View more posts</a> -->
      </div>
    </div>
  </div>
  <div class="p-strip" id="contact">
    <div class="row">
      <div class="col-8">
        <?php $id=39; $post = get_page($id); echo wpautop($post->post_content);  ?>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>

