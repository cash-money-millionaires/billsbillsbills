<?php

/*
	Template Name: home page, No Sidebar
*/

get_header();  ?>

<div class="main">
<div class="frontWrapper">
 
  <h1>Johnson's Accounting</h1>

  


  <div class="frontButtons">
  	<div class="personalButton">
  		<button type="button">Personal</button>


  	</div><!-- end personal Button -->

  	<div class="bizButton">
  		
		<button type="button">Business</button>

  	</div> <!-- end biz Button -->


</div><!-- end Front Buttons -->

 <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <h2><?php the_title(); ?></h2>
      <?php the_content(); ?>

    <?php endwhile; // end the loop?>
   
   
    
    </div>
     <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>

 
</div> <!-- /.main -->
<?php get_footer(); ?>
