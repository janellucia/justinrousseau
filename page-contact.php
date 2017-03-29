<?php

/*
	Template Name: Contact Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    	<div class="contact-container">
      		<?php the_content(); ?>
    	</div>


    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->
<div class="instagram">
	<?php  dynamic_sidebar( 'footer-widget-area' ); ?>
</div>

<?php get_footer(); ?>