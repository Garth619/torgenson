<?php 

/* Template Name: Attorney Directory 
	
Template Post Type: page, espanol */
	


get_header(); ?>

<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="meet_team_wrapper">
			
			<?php $meet_the_team = get_field( 'meet_the_team' ); ?>
			
			<?php if ( $meet_the_team ): ?>
				
				<?php foreach ( $meet_the_team as $post ):  ?>
					
					<?php setup_postdata ( $post ); ?>
						
						<div class="single_att">
				
							<a href="<?php the_permalink();?>">
					
								<div class="single_att_img">
						
									<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
									<?php if ( $attorney_image ) : ?>
							
										<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
								
										<?php else:?>
								
										<img src="<?php bloginfo('template_directory');?>/images/attorney-comingsoon.jpg" alt="<?php echo $attorney_image['alt']; ?>" alt="placeholder" />
							
									<?php endif; ?>
						
									<div class="single_att_overlay"></div><!-- single_att_overlay -->
						
								</div><!-- single_att_img -->
					
								<span class="single_att_name"><?php the_title();?></span><!-- single_att_name -->
					
								<span class="single_att_position"><?php the_field( 'attorney_position' ); ?></span><!-- single_att_position -->
					
							</a>
				
						</div><!-- single_att -->
					
					<?php endforeach; ?>
				
				<?php wp_reset_postdata(); ?>
			
			<?php endif; ?>
			
		</div><!-- meet_team_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>
