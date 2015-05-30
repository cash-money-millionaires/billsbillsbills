<?php 

/*
  Template Name:Testimonials, Full Page, No Sidebar
*/
get_header(); ?>



<!-- <div class="main"> -->
  
<div class="testWrapper">


    
      <?php // Start the loop ?>
      <?php if  ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  
  </div><!-- end testwrapper -->

<!-- </div>  -->
<!-- /.main -->

<?php get_footer(); ?>