<?php
get_header();
?>

<?php 


// $title = new display_post;
// $title -> init();
//new_title();

while ( have_posts() ) : the_post();

endwhile; // End of the loop. 

//get_sidebar();


get_template_part( 'template-parts/home', 'shop' );

get_template_part( 'template-parts/home', 'journal' );

get_template_part( 'template-parts/home', 'adventures' );

get_footer();
?>

