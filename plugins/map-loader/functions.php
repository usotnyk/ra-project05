
<?php 

/*
Plugin Name: Map loader
Plugin URI: 
Description: Adding function to load google map based on entered address
Version: 0.1
Author: Julia Sotnyk
*/

class display_map {

  function __construct() {
    $this->url = "https://www.google.com/maps/embed/v1/place?key=";
    $this->key = "AIzaSyC4_YbfYLjSE03S-z0neZMmeQOg0q46Ixc";

  }

  function build_address () {
    $street_number = get_field("street_number");
    $street_name =str_replace(" ", "+", get_field("street_name"));
    $city = get_field("city");
    $province = get_field("province");
    $postal_code = str_replace(" ", "+", get_field("postal_code"));
    $complete_address = $street_number."+".$street_name."+".$city."+".$province."+".$postal_code;

    $this->build_src($complete_address);
  }

  function build_src($address) {
    $src = $this->url.$this->key."&q=".$address;
    echo $src;
  }

}

?>