<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>
<div class=flex>
	<div id="primary" class="content-area archive-journal-container flex-one margin-md">
			<main id="main" class="site-main" role="main">
				
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<?php
						the_archive_title( '<h2 class="page-title">', '</h2>' );
						the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
				</header><!-- .page-header -->

				<?php /* Start the Loop */
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content' );
					endwhile;

					the_posts_navigation();

					else :
					get_template_part( 'template-parts/content', 'none' );

					endif; ?>

			</main><!-- #main -->
	</div><!-- #primary -->

  <aside class="width-third sidebar">
    <?php get_sidebar(); ?>
  </aside>
</div>
<?php get_footer(); ?>
