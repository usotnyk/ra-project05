<?php

//Add font-awesome library

function wmpudev_enqueue_icon_stylesheet() {
  wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );



//Add jquery library + custom js

function custom_scripts() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-3.2.1.min.js", false, null);
  
  //register all custom js for site
  wp_register_script('main-js',get_stylesheet_directory_uri().'/js/main.js');
  
  //call all custom js
  wp_enqueue_script('main-js');

  //Google fonts
  wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Merriweather:300,300i,700,700i', false );
}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


?>