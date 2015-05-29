<?php 

/*
  Template Name:Testimonials, Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">
  <div class="container">


    <div class="content">
<p>I"M A PAGE</p>

<?php echo do_shortcode("[contact-form-7 id="4" title="Contact form 1"]"); ?>
    
      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>