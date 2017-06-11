<?php

//Register custom sidebars -> aside + nav_logo

register_sidebar( array(
  'name'          => __( 'footer-sidebar', 'theme_text_domain' ),
  'id'            => 'footer-sidebar',
  'description'   => '',
        'class'         => '',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h5 class="widgettitle">',
  'after_title'   => '</h5>' ) );

register_sidebar( array(
  'name'          => __( 'logo-sidebar', 'theme_text_domain' ),
  'id'            => 'logo-sidebar',
  'description'   => '',
        'class'         => '',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>') );


?>