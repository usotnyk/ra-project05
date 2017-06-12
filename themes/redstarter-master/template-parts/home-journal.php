<h1 class="padding-md">Inhabitent Journal</h1>
<div class="flex margin-md">
<?php

$arguments = array(
  "posts_per_page" => 3);

$query = new wp_Query($arguments);
while($query->have_posts()): $query->the_post(); 

$blog_title = get_the_title();
$blog_img = get_the_post_thumbnail();
//echo $blog_img;
$link = get_the_permalink();
$date = get_the_date(); ?>

<article class="journal-container">

    <div class="img-container"><?php echo $blog_img ?></div>
    <div>
      <p><?php echo $date ?> / <?php echo get_comments_number(); ?> Comments</p>
      <h3><?php echo $blog_title ?></h3>
      <a href="<?php echo $link ?>" class="btn entry-btn">READ ENTRY </a>
    </div>
  </article>

<?php endwhile; ?>

</div>
