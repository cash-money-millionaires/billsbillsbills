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

      <h2><?//php the_title(); ?></h2>
      <?//php the_content(); ?>

    <?php endwhile; // end the loop?>
   
   
    
    </div>

  <div class="blogFront">

<?php echo do_shortcode('[lptw_recentposts layout="basic" post_type="post" fluid_images="false"columns="2" posts_per_page="2" reverse_post_order="false" thumbnail_size="medium" color_scheme="no-overlay" background_color="#ffffff" text_color="#000000" show_date_before_title="true" show_date="false" show_time="false" show_time_before="false" date_format="F j, Y" time_format="g:i a" no_thumbnails="show"]'); ?>
  

    </div> <!-- Blog front -->


    <div class="contactForm">

     <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>
</div> <!-- contact form -->

 
</div> <!-- /.main -->
<?php get_footer(); ?>
