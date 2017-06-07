<?php
get_header();

//$q = new WP_Query( 'posts_per_page=16' );
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$arguments = array(
  'post_type' => 'products',
  'order' => 'DESC',
  'posts_per_page' => 4,
  'paged' => $paged);


$query = new wp_Query($arguments);
?>
<div class="margin-md">
  <h1>Shop Stuff</h1>
  <nav class="archive-products-nav archive-dotted-border ">
    <ul class="flex flex-justify-center">
      <li><a href="../type/do/">DO</a></li>
      <li><a href="../type/eat/">EAT</a></li>
      <li><a href="../type/sleep/">SLEEP</a></li>
      <li><a href="../type/wear/">WEAR</a></li>
    </ul>
  </nav>
  <div class="flex wrap flex-justify-center margin-sm">
    <?php
    while ($query->have_posts()): $query->the_post();
    ?>

      <div class="product-container">
        <a href="<?php the_permalink(); ?>">
          <div class="image-container" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url('<?php echo get_field("image") ?>');"></div>
          <h4 class="flex fl-space-between">
            <span class="dt"><?php the_title(); ?> </span>
            <span class="fl-one dots"></span> 
            <span class="dd"> <?php the_field("price"); ?> </span>
          </h4>
          
        </a>
      </div>

    <?php
    endwhile;


    ?>
  </div>
  <div class="archive-pagination-links">
    <div><?php posts_nav_link( " - ", "PREVIOUS", "NEXT" ); ?></div>
  
    <div><?php next_posts_link( 'Show previous products' ); ?></div>
    <div><?php previous_posts_link( 'Show next products' ); ?></div>
  </div>


</div>

<?php get_footer(); ?>
