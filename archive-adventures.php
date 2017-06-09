
<?php
get_header();?>
<div class="margin-md">
  <h1 class="archive-dotted-border">Latest Adventures</h1>
  <div class="flex wrap">

  <?php
  while ( have_posts() ) : the_post();


  //the_field("banner-image");

  ?>

    <div class="adventure-container padding-md font-white" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>');">
      <h2><?php the_title(); ?></h2>
      <a href="<?php the_permalink(); ?>"><button class="read-btn">Read more</button></a>
    </div>


  <?php
  endwhile; // End of the loop. 

  ?>

  </div>
  
  <div class= "text-center">
    <?php red_starter_numbered_pagination(); ?>
  </div>

</div>

<?php   get_footer(); ?>