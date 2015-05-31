<?php

/*
	Template Name: Contact Page, No Sidebar
*/

get_header();  ?>

<div class="main">

 <div class="contactMain">
 

    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?//php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>







<div class="contactFormPageForm">

<h1>Contact Us</h1>

 <?php echo do_shortcode( '[contact-form-7 id="106" 
 title="Contact Page Form"]' ); ?>

 </div> <!-- Contact form page -->

   
</div> <!-- end contact.main -->

 
</div> <!-- /.main -->

<?php get_footer(); ?>
