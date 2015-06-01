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

<div class="contactFormPlace">

 <?php echo do_shortcode( '[contact-form-7 id="4" title="Contact form 1"]' ); ?>

 </div> <!-- contact form placement -->

  </div> <!-- Contact form page form -->


<div class="moreContactPage">
<div class="addressContactPage">
  <h3> <i class="fa fa-map-marker"></i> Our Address:</h3>
    <!-- <p>483 Queen St. W</p>
    <p>3rd floor</p>
    <p>Toronto, ON</p>
    <p>M5V 2A9</p> -->

    <!-- <div class="contactMapFrame"> -->
    <iframe src="https://www.google.com/maps/embed?pb=
!1m18!1m12!1m3!1d2886.9943928927446!2d-79.397899400
00003!3d43.648284999999994!2m3!1f0!2f0!3f0!3m2!1i1024
!2i768!4f13.1!3m3!1m2!1s0x882b34dc87fa67bd%3A0xe0537
6a9e49647e1!2s483+Queen+St+W%2C+Toronto%2C+ON+M5V+2A
9!5e0!3m2!1sen!2sca!4v1433121882455" width="400" 
height="300" frameborder="0" style="border:0"></iframe>
<!-- </div> -->

</div>  <!-- end div.address -->

<div class="hoursContactPage">
<h3><i class="fa fa-clock-o"></i>Hours</h3>
<p>Mon: 9am - 5pm</p>
<p>Tue: 9am - 5pm</p>
<p>Wed: 9am - 5pm</p>
<p>Thu: 9am - 5pm</p>
<p>Fri: 9am - 5pm</p>
<p>Sat: Closed</p>
<p>Sun: Closed</p>
	


</div>
<!-- end div.hours -->
<div class="phoneContactPage">

<h3><i class="fa fa-envelope-o"></i>E-mail: </h3>
<p>accounting@fakemail.com</p>
<p><span>Phone:</span> </p>
<p>416-666-6666</p>
  


</div>
<!-- end div.phone -->



 	 <div class="socialContacts">


 	 <h3>Social Media</h3>
<div class="socialContactsIcons">
 	<p><a href="#"> <i class="fa fa-twitter-square"></i></a></p>
 	     	<p><a href="#"><i class="fa fa-facebook-official"></i></a></p>
 	     	<p><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
 	     	<p><a href="#"><i class="fa fa-youtube-square"></i></a></p>
 	     	<p><a href="#"><i class="fa fa-yelp"></i></a></p>

</div> <!-- end social contacts icons -->

 	 </div> <!-- end social contacts -->

</div> <!-- end more contact info -->







 	
 	




   
</div> <!-- end contact.main -->

 </div> <!-- /.main -->


<?php get_footer(); ?>


  