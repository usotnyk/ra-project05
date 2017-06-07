<?php

$arguments = array(
  'post_type' => 'adventures',
  'order' => 'ASC',
  'posts_per_page' => 4);
sort by asc order!!

$query = new wp_Query($arguments);
//$counter = 0;

while($query->have_posts()): $query->the_post(); 
//$title = get_the_title();
//$link = get_the_permalink(); ?>

    <article class="article-box-1 pos-ralative" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>');">
      <h2><?php the_title(); ?></h2>
      <a href="<?php the_permalink(); ?>"><button class="read-btn">READ MORE</button></a>
    </article>

<?php
endwhile;

?>