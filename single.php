<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 * 
 * @package ElmTherapy
 * @since 1.0
 * @version 1.0
 */
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="p-strip--light">
  <div class="row">
    <div class="col-12 suffix-2 prefix-2 u-align--center">
      <h1><?php the_title(); ?></h1>
      <p class="muted-heading">by <?php the_author() ?> on <?php the_date() ?></p>
    </div>
  </div>
</div>
<div class="p-strip">
  <div class="row">
    <div class="col-12 suffix-2 prefix-2">
      <?php the_content(); ?>
    </div>
  </div>
</div>

<?php endwhile; else : ?>
<div class="p-strip">
  <div class="row">
    <div class="col-12 suffix-2 prefix-2 u-align--center">
      <h1>Page not found: 404</h1>
    </div>
  </div>
</div>
<?php endif; ?>

<?php get_footer(); ?>