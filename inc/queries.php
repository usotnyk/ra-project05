<?php

//Query for products archive

function filter_query_products_archive( $query ) {
  if(is_post_type_archive('products')) {
    $query->set("posts_per_page", 12);
    $query->set("order","ASC");
    return $query;
  }  
}

add_filter( 'pre_get_posts', 'filter_query_products_archive' );

?>