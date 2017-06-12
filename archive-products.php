<?php get_header(); ?>

<div id="primary" class="content-area margin-md">
  <main id="main" class="site-main" role="main">
    <h1>Shop Stuff</h1>
    <nav class="archive-products-nav archive-dotted-border ">
      <ul class="flex flex-justify-center">
        <li><a href="../type/do/">DO</a></li>
        <li><a href="../type/eat/">EAT</a></li>
        <li><a href="../type/sleep/">SLEEP</a></li>
        <li><a href="../type/wear/">WEAR</a></li>
      </ul>
    </nav>
    <div class="flex wrap flex-justify-center margin-sm">
      <?php while (have_posts()): the_post(); ?>

        <div class="product-container">
          <a href="<?php the_permalink(); ?>">
            <div class="image-container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo get_field("image") ?>');"></div>
            <h4 class="flex flex-space-between">
              <span><?php the_title(); ?> </span>
              <span class="flex-one dots"></span> 
              <span> <?php the_field("price"); ?> </span>
            </h4>
          </a>
        </div>

      <?php endwhile; ?>
    </div>

    <div class= "text-center">
      <?php red_starter_numbered_pagination(); ?>
    </div>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
