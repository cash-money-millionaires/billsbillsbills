<?php 

/*
  Template Name: Resources, Full Page, No Sidebar
*/
?>

<?php get_header(); ?>



<!-- <div class="main"> -->
  
<div class="reso-wrapper"> <!-- TITLE WRAPPER -->

      <?php // Start the loop ?>
      <?php if  ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
      
</div> <!-- END OF TITLE WRAPPER -->

    <?php //get_sidebar(); ?>  

<div class="reso-pages-wrap"> <!-- NESTED PAGES WRAPPER -->
	<?php
		$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

		foreach( $mypages as $page ) {		
			$content = $page->post_content;
			if ( ! $content ) // Check for empty page
				continue;

			$content = apply_filters( 'the_content', $content );
		?>
			<div class="reso-pages"> <!-- NESTED PAGES -->
				<h2 class="reso-title"><a href="<?php echo get_page_link( $page->ID ); ?>"><?php echo $page->post_title; ?></a></h2>
				<div class="entry"><?php echo $content; ?></div>
			</div>
			
		<?php
		}	
	?>
</div>	

<!-- </div>  -->
<!-- /.main -->

<?php get_footer(); ?>