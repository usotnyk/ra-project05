<?php
/**
 * RED Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RED_Starter_Theme
 */

if ( ! function_exists( 'red_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function red_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // red_starter_setup
add_action( 'after_setup_theme', 'red_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function red_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'red_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'red_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function red_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'red_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function red_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'red_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function red_starter_scripts() {
	wp_enqueue_style( 'red-starter-style', get_stylesheet_uri() );

	wp_enqueue_script( 'red-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'red_starter_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

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

//Add font-awesome library

function wmpudev_enqueue_icon_stylesheet() {
  wp_register_style( 'fontawesome', 'http:////maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
  wp_enqueue_style( 'fontawesome');
}
add_action( 'wp_enqueue_scripts', 'wmpudev_enqueue_icon_stylesheet' );

//Add jquery library

function jquery_script() {
  wp_deregister_script('jquery');
  wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-3.2.1.min.js", false, null);
  wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() . '/main.js' );
}
add_action( 'wp_enqueue_scripts', 'jquery_script' );

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

//Query for products archive

function filter_query_products_archive( $query ) {
  if(is_post_type_archive('products')) {
    $query->set("posts_per_page", 8);
    $query->set("order","ASC");
    return $query;
  }  
}

add_filter( 'pre_get_posts', 'filter_query_products_archive' );
?>

