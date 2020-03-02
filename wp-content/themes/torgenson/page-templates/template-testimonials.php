<?php 

/* Template Name: Testimonials

Template Post Type: page, espanol */

get_header(); ?>

<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="testi_wrapper">
			
			<?php if(get_field('testimonials')): ?>
			 
				<?php while(has_sub_field('testimonials')): ?>
			 
					<div class="single_testi">
				
						<img class="testi_star" src="<?php bloginfo('template_directory');?>/images/stars.svg"/><!-- testi_star -->
				
						<?php echo file_get_contents("wp-content/themes/torgenson/images/quotemark-blue.svg"); ?>
				
						<span class="testi_description"><?php the_sub_field( 'description' ); ?></span><!-- testi_description -->

						<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
				
					</div><!-- single_testi -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
						
		</div><!-- testi_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
