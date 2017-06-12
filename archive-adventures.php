
<?php
get_header();?>
  <div id="primary" class="content-area margin-md">
    <main id="main" class="site-main" role="main">

        <h1 class="archive-dotted-border">Latest Adventures</h1>
        <div class="flex wrap flex-justify-center">

          <?php while ( have_posts() ) : the_post(); ?>

          <div class="adventure-container padding-md font-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>');">
            <h2><?php the_title(); ?></h2>
            <a href="<?php the_permalink(); ?>" class="btn read-btn">Read more</a>
          </div>


          <?php endwhile; ?>

        </div>
        
        <div class= "text-center">
          <?php red_starter_numbered_pagination(); ?>
        </div>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php   get_footer(); ?>


  <div id="primary" class="content-area margin-md">
    <main id="main" class="site-main" role="main">

    </main><!-- #main -->
  </div><!-- #primary -->