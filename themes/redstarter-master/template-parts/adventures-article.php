    <article class="article-box-<?php echo $counter ?> " style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>');">
      <h2><?php the_title(); ?></h2>
      <a href="<?php the_permalink(); ?>"><button class="read-btn">READ MORE</button></a>
    </article>