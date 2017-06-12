
<?php 

/*
Plugin Name: Red banner
Plugin URI: redacademy.com
Description:Adding function to create a custom banner
Version: 0.1
Author: Julia Sotnyk
*/

class display_banner {

  function __construct() {
    $this -> banner = get_field("banner-image");
    $this -> logo_round_home = get_field("logo-round-home");
    //$this->route = $route;
    $this -> render = "";
    $this -> logo_color = "";
    $this -> hr = "";
    $this -> nav_font_color = "";
  }

  public function check_img () {
    if ($this -> banner != null && !is_post_type_archive() && !is_search()) {
      $this -> show_banner();
      $this -> logo_color = "logo-white";
    } else {
      $this -> hide_banner();
      $this -> logo_color = "logo-green";
      $this -> hr = "<hr>";
      $this ->  nav_font_color = "nav-green";
    }
  }

  private function show_banner() {
    if(is_front_page()) {
      $style = "background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('$this->logo_round_home'), url('$this->banner'); background-size: cover, 50vh, cover;";
    } else {
      $style = "background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2)), url('$this->banner')";
      }
    $this->render = $style;
    $this->output();
  }

  private function hide_banner() {
    $style = "background-image: none; height: auto;";

    $this->render = $style;
    $this->output();
  }
  
  private function output() {
    echo $this->render;
  }
}

?>