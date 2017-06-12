
<?php get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <h1 class="about-title"><?php the_title(); ?></h1>
    <div class="sinlge-view-margin">
      <p><?php the_content(); ?></p>
    </div>

    <?php endwhile; ?>
    
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>



