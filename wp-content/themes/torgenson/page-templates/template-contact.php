<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>

<div id="internal_main">
	
	<div class="contact_top">
		
		<div class="contact_top_content_wrapper">
			
			<h1 class="contact_title"><?php the_title();?></h1><!-- contact_title -->
			
			<div class="contact_top_content">
				
				<div class="contact_locations">
					
					<div class="contact_location_col">
						
						<span class="contact_header"><?php the_field( 'footer_address_title','option'); ?></span><!-- contact_header -->
						
						<span class="contact_item"><?php the_field( 'footer_address','option'); ?></span><!-- contact_item -->
						
						<a class="contact_button" href="<?php the_field( 'google_map_link','option'); ?>">
							
							<span>Directions</span>
							
							<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
							
						</a><!-- contact_button -->
						
					</div><!-- contact_location_col -->
					
					<div class="contact_location_col">
						
						<span class="contact_header contact_phone_title"><?php the_field( 'footer_phone_title','option'); ?></span><!-- contact_header -->
						
						<a class="contact_item contact_phone" href="tel:<?php echo str_replace(['-', '.', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>"><?php the_field( 'footer_phone','option'); ?></a><!-- contact_item -->
						
						<span class="contact_header contact_office_title"><?php the_field( 'footer_office_hours_title','option'); ?></span><!-- contact_header -->
						
						<span class="contact_item"><?php the_field( 'footer_office_hours','option'); ?></span><!-- contact_item -->
						
					</div><!-- contact_location_col -->
					
					<div class="contact_location_col">
						
						<span class="contact_header contact_social_title"><?php the_field( 'footer_social_title','option'); ?></span><!-- contact_header -->
						
						<div class="contact_social_wrapper">
					
							<a class="sm" href="<?php the_field( 'facebook','option'); ?>" target="_blank" rel="noopener">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/facebook.svg"); ?>
						
							</a>
					
							<a class="sm" href="<?php the_field( 'twitter','option'); ?>" target="_blank" rel="noopener">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/twitter.svg"); ?>
						
							</a>
					
							<a class="sm" href="<?php the_field( 'linkedin','option'); ?>" target="_blank" rel="noopener">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/linkedin.svg"); ?>
						
							</a>
					
						</div><!-- social_wrapper -->
						
					</div><!-- contact_location_col -->
					
				</div><!-- contact_locations -->
				
			</div><!-- contact_top_content -->
			
		</div><!-- contact_top_content_wrapper -->
		
		<img class="contact_top_img" src="<?php bloginfo('template_directory');?>/images/internal-about.jpg"/><!-- contact_top_img -->
		
	</div><!-- contact_top -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>