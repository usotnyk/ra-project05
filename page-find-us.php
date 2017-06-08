<?php
get_header();
?>
<div class="flex">
  <div class="find-us-container margin-md fl-one">
    <?php
    while ( have_posts() ) : the_post();
    ?>
    <h1><?php the_title(); ?></h1>
    <div>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2887.204854922934!2d-79.40007298450254!3d43.64390607912174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34ded090e0e7%3A0x59020291c73c5c16!2s462+Wellington+St+W+%23101%2C+Toronto%2C+ON+M5V+1E3!5e0!3m2!1sen!2sca!4v1496857912254" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
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