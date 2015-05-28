<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main">
  <!-- <div class="container"> -->



    <!-- <div class="content"> -->
    <div class="blogContainer">
    	<h1>Accounting Blog</h1>

    


    
    		<?php get_template_part( 'loop', 'index' );	?>

    		</div><!-- end blog container -->
    <!-- </div> --> 
    <!--/.content -->

    <?//php get_sidebar(); ?>

  <!-- </div>  -->
  <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>