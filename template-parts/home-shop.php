
<?php $termArray = get_terms("type"); ?>

<h1 class="padding-md">Shop Stuff</h1>
  <div class="flex margin-md">
<?php foreach ($termArray as $term) { 
  $description = $term -> description;
  $blog_post_link = get_bloginfo("stylesheet_directory");
  $term_name = $term -> name;
  $img_link = $blog_post_link."/assets/images/product-type-icons/".$term_name.".svg";
  $id = $term -> term_id;
  $button_link = get_term_link($id);

  ?>
  

  <article class="shop-container text-center margin-sm">
    <img src="<?php echo $img_link; ?>" class="width-quarter">
    <p><?php echo $description; ?></p>
    <a href="<?php echo $button_link; ?>"><button class="shop-btn margin-sm"><?php echo $term_name ?> STUFF</button></a>
  </article>



<?php } ?>
  </div>

