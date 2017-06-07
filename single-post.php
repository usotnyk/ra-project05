single-post.php
<?php
get_header();

while ( have_posts() ) : the_post();

$category_array = get_the_category();

$category_list = get_the_category_list(", ", 'multiple');

?>

<div class="single-post-container fl-one margin-md">
    <div class="single-post-img-container pos-relative" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
      <h2><?php the_title(); ?></h2>
      <div class="post-details-container">
        <span><?php the_date() ?> /</span>
        <span> 3 comments / </span>
        <span><?php the_author() ?></span>
      </div>
    </div>
    <p><?php the_content(); ?></p>
    
    <div class="flex">
      <div class="categories-container">
        <span>Posted In</span>
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        <span><?php echo $category_list; ?></span>
      </div>
      <div class="tags-container">
        <span>Tagged</span>
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
        <span><?php the_tags("", ", "); ?></span>
      </div>
    </div>

    <!--buttons-->
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

  
<?php
endwhile; // End of the loop. 

get_footer();

?>

