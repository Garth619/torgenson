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
						
						<span class="contact_header">Address</span><!-- contact_header -->
						
						<span class="contact_item">333 West Roosevelt Street<br/> Phoenix, AZ 85003</span><!-- contact_item -->
						
						<a class="contact_button" href="">
							
							<span>Directions</span>
							
							<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
							
						</a><!-- contact_button -->
						
					</div><!-- contact_location_col -->
					
					<div class="contact_location_col">
						
						<span class="contact_header contact_phone_title">Phone Number</span><!-- contact_header -->
						
						<span class="contact_item">(602) 833-2774</span><!-- contact_item -->
						
						<span class="contact_header contact_office_title">Office Hours</span><!-- contact_header -->
						
						<span class="contact_item">Mon-Fri 8:00am - 5:00pm</span><!-- contact_item -->
						
					</div><!-- contact_location_col -->
					
					<div class="contact_location_col">
						
						<span class="contact_header contact_social_title">Social</span><!-- contact_header -->
						
						<div class="contact_social_wrapper">
					
							<a class="sm" href="">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/facebook.svg"); ?>
						
							</a>
					
							<a class="sm" href="">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/twitter.svg"); ?>
						
							</a>
					
							<a class="sm" href="">
						
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