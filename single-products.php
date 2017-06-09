<?php
get_header();

while(have_posts()): the_post(); 
//while there are posts in have_posts, return the current ittiration - the_post (for all type of content - pages/posts - not categories);
?>
<div class="flex single-products-container">
  <div class="padding-sm flex-one">
    <img src="<?php the_field("image");?>">
  </div>
  <div class="padding-sm flex-one">  
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
?>
<div class="text-center flex flex-justify-center single-pagination-container">
  <div class="margin-md">
    <span>
      <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
    </span>
    <span><?php previous_post_link('%link'); ?></span>
  </div>
  <div class="margin-md">
    <span><?php next_post_link('%link'); ?></span>
    <span>
      <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
    </span>
  </div>
</div>

<?php 

get_footer();
?>