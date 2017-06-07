<?php
get_header();

while(have_posts()): the_post(); 
//while there are posts in have_posts, return the current ittiration - the_post (for all type of content - pages/posts - not categories);
?>
<div class="flex single-products-container">
  <div class="padding-sm fl-one">
    <img src="<?php the_field("image");?>">
  </div>
  <div class="padding-sm fl-one">  
    <h2><?php the_title();?></h2>
    <h3><?php the_field("price");?></h3>
    <p><?php the_content();?></p>
    <div class="flex">
      <button class="btn-social">
        <i class="fa fa-facebook" aria-hidden="true"></i>
        <span>Like</span>
      </button>
      <button class="btn-social">
        <i class="fa fa-twitter" aria-hidden="true"></i>
        <span>Tweet</span>
        </button>
      <button class="btn-social">
        <i class="fa fa-pinterest" aria-hidden="true"></i>
        <span>PIN</span>
      </button>
    </div>
  </div>
</div>


<?php
endwhile;

get_footer();
?>