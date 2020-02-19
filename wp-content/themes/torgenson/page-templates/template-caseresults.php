<?php 

/* Template Name: Case Results */

get_header(); ?>

<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="cr_wrapper">
			
			<?php if(get_field('case_results_page')): ?>
			 
				<?php while(has_sub_field('case_results_page')): ?>
			 
					<div class="single_cr">
				
						<span class="cr_type"><?php the_sub_field( 'case_result_type' ); ?></span><!-- cr_type -->
				
						<span class="cr_amount"><?php the_sub_field( 'case_results_amount' ); ?></span><!-- cr_amount -->
				
						<span class="cr_description"><?php the_sub_field( 'description' ); ?></span><!-- cr_description -->
				
					</div><!-- single_cr -->
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
									
		</div><!-- cr_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

						
			  


<?php get_footer(); ?>
