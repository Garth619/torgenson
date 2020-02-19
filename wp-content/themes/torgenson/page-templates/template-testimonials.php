<?php 

/* Template Name: Testimonials */

get_header(); ?>

<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="testi_wrapper">
			
			<div class="single_testi">
				
				<img class="testi_star" src="<?php bloginfo('template_directory');?>/images/stars.svg"/><!-- testi_star -->
				
				<?php echo file_get_contents("wp-content/themes/torgenson/images/quotemark-blue.svg"); ?>
				
				<span class="testi_description">“I received more than 10x what was initially offered 
me by the other party’s insurance agency and they were incredibly kind and professional.”</span><!-- testi_description -->

				<span class="testi_name">Emma D.</span><!-- testi_name -->
				
			</div><!-- single_testi -->
			
			<div class="single_testi">
				
				<img class="testi_star" src="<?php bloginfo('template_directory');?>/images/stars.svg"/><!-- testi_star -->
				
				<?php echo file_get_contents("wp-content/themes/torgenson/images/quotemark-blue.svg"); ?>
				
				<span class="testi_description">“I received more than 10x what was initially offered 
me by the other party’s insurance agency and they were incredibly kind and professional.”</span><!-- testi_description -->

				<span class="testi_name">Emma D.</span><!-- testi_name -->
				
			</div><!-- single_testi -->
			
		</div><!-- testi_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
