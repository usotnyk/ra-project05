<?php get_header(); ?>

<div id="primary" class="content-area single-adventures-container sinlge-view-margin">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
    <h5>by <?php the_author(); ?></h5>
    <p><?php the_content(); ?></p>

    <div class="flex">
      <a href="#" class="btn btn-social">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <span>Like</span>
      </a>
      <a href="#" class="btn btn-social">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <span>Tweet</span>
      </a>
      <a href="#" class="btn btn-social">
        <i class="fa fa-pinterest" aria-hidden="true"></i>
        <span>PIN</span>
      </a>
    </div>

    <?php endwhile; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

