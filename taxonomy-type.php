<?php get_header(); ?>
<div id="primary" class="content-area margin-md">
  <main id="main" class="site-main" role="main">
    <h1><?php echo get_queried_object()->name; ?></h1>
    <p class="text-center archive-dotted-border"><?php echo get_queried_object()->description; ?></p>

    <div class="flex wrap flex-justify-center margin-sm">
      <?php
      while (have_posts()): the_post();
      ?>

        <div class="product-container">
          <a href="<?php the_permalink(); ?>">
            <div class="image-container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo get_field("image") ?>');"></div>
            <h4 class="flex flex-space-between">
              <span class="dt"><?php the_title(); ?> </span>
              <span class="flex-one dots"></span> 
              <span class="dd"> <?php the_field("price"); ?> </span>
            </h4>
            
          </a>
        </div>

      <?php endwhile; ?>

    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>