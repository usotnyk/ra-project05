<?php
/**
 * Template part for displaying results in search pages.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
		<a href="<?php the_permalink(); ?>">
			<button class="entry-btn">
		    <span>READ MORE</span>
		    <span>
		      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
		    </span>
		  </button>
	 	</a>
</article><!-- #post-## -->
