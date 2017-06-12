<?php 
//register CPT + taxonomy

function add_taxonomy () {

  $tax_array = array(
    "products" => array("type"),
    "adventures"

  );

  foreach ($tax_array as $tax_name => $inner_array) {
    if (is_array($inner_array)) {
      register_post($tax_name);
      foreach ($inner_array as $cust_post_type) {
      create_project_tax($tax_name, $cust_post_type);
      }
    } else {
      register_post($inner_array);
    }
  }
}

function register_post($post_name) {
register_post_type( $post_name,
  // CPT Options
    array(
      'labels' => array(
        'name' => __( ucwords($post_name) ),
        'singular_name' => __( $post_name )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => $post_name),
    )
  );
}

function create_project_tax($tax_name, $cust_post_type) {   
  register_taxonomy(
    $cust_post_type,
    $tax_name,
    array(
      'label' => __( $cust_post_type ),
      'rewrite' => array( 'slug' => $cust_post_type ),
      'hierarchical' => true,
    )
  );
}
add_action( 'init', 'add_taxonomy' );

?>
