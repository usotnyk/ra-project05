<?php
get_header();
?>

<div class="flex">
  <div class="archive-journal-container margin-md fl-one">
    <?php
    while ( have_posts() ) : the_post();
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
      <p><?php the_excerpt(); ?></p>
      <a href="<?php the_permalink() ?>">
        <button class="entry-btn">
          <span>READ MORE</span>
          <span>
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
          </span>
        </button>
        </a>
    
  </div>
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