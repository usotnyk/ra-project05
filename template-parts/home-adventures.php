<h1 class="padding-md">Latest Adventures</h1>
<div class="flex margin-md font-white latest-posts-container">

<?php
$arguments = array(
  'post_type' => 'adventures',
  'order' => 'ASC',
  'posts_per_page' => 4);


$query = new wp_Query($arguments);
$counter = 0;

while($query->have_posts()): $query->the_post(); 
$counter++;
$title = get_the_title();
$link = get_the_permalink();

if ($counter == 1) {?>

  <div class="flex-one">
    <article class="article-box-1 pos-relative" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>');">
      <h2><?php the_title(); ?></h2>
      <a href="<?php the_permalink(); ?>"><button class="read-btn">READ MORE</button></a>
    </article>
    ?>
  </div>

<?php
};

if ($counter == 2) {?>

  <div class="flex flex-col flex-one">
    <article class="article-box-2 flex-one" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>');">
      <h3><?php echo $title ?></h3>
      <a href="<?php echo $link ?>"><button class="read-btn">READ MORE</button></a>
    </article>

<?php
};

if ($counter == 3) {?>

  <div class="flex flex-one">
    <article class="article-box-3 flex-one" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>');">
      <h4><?php echo $title ?></h4>
      <a href="<?php echo $link ?>"><button class="read-btn">READ MORE</button></a>
    </article>
<?php
};

if ($counter == 4) {?>

      <article class="article-box-4 flex-one" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php the_field("image") ?>')">
        <h4><?php echo $title ?></h4>
        <a href="<?php echo $link ?>"><button class="read-btn">READ MORE</button></a>
      </article>
    </div>  
  </div>  
</div>

<?php
};

endwhile;
?>
<a href="/ra-project05/adventures/"><button class="adv-btn">MORE ADVENTURES</button></a>

