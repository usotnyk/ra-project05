
<?php

get_header();

while ( have_posts() ) : the_post();
?>
<h1 class="about-title"><?php the_title(); ?></h1>
<div class="sinlge-view-margin">
  <p><?php the_content(); ?></p>
</div>
<?php
endwhile;

get_footer();
?>