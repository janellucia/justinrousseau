<?php

/*
	Template Name: About Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <?php // Start the loop ?>
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="about-text">
	<h2 class="about-title">About Me</h2>
	<?php the_content(); ?></div>     

    <?php endwhile; // end the loop?>
  </div> <!-- /.container -->
</div> <!-- /.main -->
<div class="main-footer">
	<div class="instagram">
		<?php  dynamic_sidebar( 'footer-widget-area' ); ?>
	</div>

	<?php get_footer(); ?>
	
</div>