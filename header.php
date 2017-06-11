<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


	<?php wp_head(); ?>
	</head>


	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
			
			<?php $banner = new display_banner(); ?>

			<div style="<?php  
				$banner->check_img();
			?>" class='banner'> <!--banner div -->

				<nav id="site-navigation" class="main-navigation flex flex-space-between flex-align-center navigation <?php echo $banner->nav_font_color; ?>" role="navigation">
					<div class="logo-wrapper <?php echo $banner->logo_color; ?>">

						<?php dynamic_sidebar('logo-sidebar'); ?>
					</div>
					<div class="flex flex-align-center">
						<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
						<div class="nav-search-container">
							<div id="nav-search-form">
								<?php get_search_form(); ?>
							</div>
							<i id="search-icon" class="fa fa-search" aria-hidden="true"></i>
						</div>
					</div>
				</nav> <!-- #site-navigation -->
				</div> <!--banner div -->
				
				<?php
				//adding horizontal rule 
				echo $banner->hr; 
				?>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
