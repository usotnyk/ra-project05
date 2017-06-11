<?php
get_header();
?>
<div class="flex">
  <div class="find-us-container margin-md flex-one">
    <?php
    while ( have_posts() ) : the_post();
    ?>
    <h1><?php the_title(); ?></h1>

    <?php 
    $map = new display_map(); 
    
    ?>

    <div>
      <iframe src="<?php $map->build_address(); ?>" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>



    <div class="content"><?php the_content(); ?></div>

    <?php
    endwhile;

    ?>
  </div>
  <aside class="width-third sidebar">
    <?php get_sidebar(); ?>
  </aside>
</div>
<?php
get_footer();
?>