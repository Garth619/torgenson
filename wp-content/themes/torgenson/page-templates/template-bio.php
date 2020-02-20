<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">
		
	<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<div class="att_bio_wrapper">
			
			<div class="att_bio_top">
				
				<div class="att_bio_left">
					
					<div class="att_profile_wrapper desktop">
						
						<div class="att_profile_image">
							
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) { ?>
							
								<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php } ?>
							
						</div><!-- att_profile_image -->
						
					</div><!-- att_profile_wrapper -->
					
				</div><!-- att_bio_left -->
				
				<div class="att_bio_right">
					
					<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
					
					<span class="att_position"><?php the_field( 'attorney_position' ); ?></span><!-- att_position -->
					
					<div class="att_profile_wrapper mobile">
						
						<div class="att_profile_image">
							
							<?php $attorney_image = get_field( 'attorney_image' ); ?>
							
							<?php if ( $attorney_image ) { ?>
							
								<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
							
							<?php } ?>

							
						</div><!-- att_profile_image -->
						
					</div><!-- att_profile_wrapper -->
					
					<div class="att_bio_description">
						
						<?php the_field( 'attorney_intro' ); ?>						
												
					</div><!-- att_bio_description -->
					
				</div><!-- att_bio_right -->
				
			</div><!-- att_bio_top -->
			
			<div class="att_bio_bottom content">
				
				<?php the_field( 'attorney_content' ); ?>
				
			</div><!-- att_bio_bottom -->
			
		</div><!-- att_bio_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
