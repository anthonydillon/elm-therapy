<?php
function create_post_type() {
  register_post_type( 'treatments',
    array(
      'labels' => array(
        'name' => __( 'Treatments' ),
        'singular_name' => __( 'Treatment' )
      ),
      'public' => true,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );
?>
