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
        <h1>ELM Therapy; for a happier, healthier you.</h1>
        <p>Massage benefits the whole body, both physiologically and psychologically.</p>
      </div>
      <div class="col-6 u-hide--small">
        <img src="/wp-content/themes/elm-therapy/images/hero-image-2.jpg" alt="" class="u-image-position--bottom u-image-position--right" />
      </div>
    </div>
  </div>
  <div class="p-strip--light is-bordered" id="about">
    <div class="row">
      <div class="col-8">
  <h2>Samantha Collins ITEC Dip</h2>
  <p>I became interested in massage and holistic therapies approximately five years ago when I met my mother-in-law, Zakia Collins.  Zakia ran the West London School of Therapeutic Massage for over 20 years and is a fountain of knowledge when it comes to complementary therapies.  Listening to Zakia’s clients tell their stories, and express how her treatments changed their lives made me look into alternative therapies and undertake my own studies.  In 2017 I studied with The Academy of Reflexology and Massage in Northampton and qualified with the following ITEC accreditations:</p>
  <ul>
    <li>Level 3 diploma in Holistic Massage</li>
    <li>Level 3 diploma in Anatomy and Physiology and Practice Management Level 2 Emergency First Aid at Work</li>
  </ul>
  <p>I am also a full member of Complementary Therapists Association (CtHA) and regularly attend Continuing Professional Development (CPD) courses to widen and boost my skills.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-6">
        <h3>Physiological</h3>
        <ul class="p-list--divided">
          <li class="p-list__item is-ticked">Relieve tired, stiff joints</li>
          <li class="p-list__item is-ticked">Promotes general relaxation</li>
          <li class="p-list__item is-ticked">Improves skin tone</li>
          <li class="p-list__item is-ticked">Encourage better circulation</li>
          <li class="p-list__item is-ticked">Encourage sleep</li>
        </ul>
      </div>
      <div class="col-6">
        <h3>Psychological</h3>
        <ul class="p-list--divided">
          <li class="p-list__item is-ticked">Reduce tension and stress</li>
          <li class="p-list__item is-ticked">Relax the body and mind</li>
          <li class="p-list__item is-ticked">Reduce anxiety</li>
          <li class="p-list__item is-ticked">Increase energy</li>
          <li class="p-list__item is-ticked">Increase energy levels</li>
        </ul>
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
      <div class="p-card--highlighted col-3">
        <h4>Full body relaxation massage</h4>
        <p>60 minute</p>
        <p class="p-heading--four">£40</p>
      </div>
      <div class="p-card--highlighted col-3">
        <h4>Full body invigorating massage</h4>
        <p>60 minute</p>
        <p class="p-heading--four">£40</p>
      </div>
      <div class="p-card--highlighted col-3">
        <h4>Head, neck, shoulder and back massage</h4> 
        <p>30 minute</p>
        <p class="p-heading--four">£25</p>
      </div>
      <div class="p-card--highlighted col-3">
        <h4>Hand and foot massage</h4> 
        <p>30 minute</p>
        <p class="p-heading--four u-position--bottom">£25</p>
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
        <h2>Contact</h2>
        <p>Please contact me to book an appointment.</p>
        <ul class="p-list--divided">
          <li class="p-list__item">Samantha Collins</li>
          <li class="p-list__item">Tel: <strong><a href="tel:07983549226">07983 549226</a></strong></li>
          <li class="p-list__item">Email: <a href="mailto:elmtherapy@outlook.com">elmtherapy@outlook.com</a></li>
          <li class="p-list__item">Facebook: <a href="https://www.facebook.com/ElmTherapy">ElmTherapy</a></li>
        </ul>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
    
