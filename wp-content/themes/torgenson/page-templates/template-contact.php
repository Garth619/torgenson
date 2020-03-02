<?php
	
	/* Template Name: Contact
	
	Template Post Type: page, espanol */
	
	get_header(); ?>

<div id="internal_main">
	
	
	
	<div class="contact_top">
		
		<div class="contact_top_content_wrapper">
			
			<h1 class="contact_title"><?php the_title();?></h1><!-- contact_title -->
			
			<div class="contact_top_content">
				
				<?php if(get_field('spanish_header_and_footer') || is_singular('espanol')) : ?>
	
					<div class="contact_locations">
					
					<div class="contact_location_col">
						
						<span class="contact_header"><?php the_field('spanish_footer_address_title','option'); ?></span><!-- contact_header -->
						
						<span class="contact_item"><?php the_field('spanish_footer_address','option'); ?></span><!-- contact_item -->
						
						<a class="contact_button" href="<?php the_field('spanish_google_map_link','option'); ?>">
							
							<div class="contact_button_inner">
							
								<span><?php the_field( 'spanish_directions_verbiage','option'); ?></span>
							
								<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
							
							</div><!-- contact_button_inner -->
							
						</a><!-- contact_button -->
						
					</div><!-- contact_location_col -->
					
					<div class="contact_location_col">
						
						<span class="contact_header contact_phone_title"><?php the_field('spanish_footer_phone_title','option'); ?></span><!-- contact_header -->
						
						<a class="contact_item contact_phone" href="tel:<?php echo str_replace(['-', '.', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>"><?php the_field('spanish_footer_phone','option'); ?></a><!-- contact_item -->
						
						<span class="contact_header contact_office_title"><?php the_field('spanish_footer_office_hours_title','option'); ?></span><!-- contact_header -->
						
						<span class="contact_item"><?php the_field('spanish_footer_office_hours','option'); ?></span><!-- contact_item -->
						
					</div><!-- contact_location_col -->
					
					<div class="contact_location_col">
						
						<span class="contact_header contact_social_title"><?php the_field('spanish_footer_social_title','option'); ?></span><!-- contact_header -->
						
						<div class="contact_social_wrapper">
					
							<a class="sm" href="<?php the_field('spanish_facebook','option'); ?>" target="_blank" rel="noopener">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/facebook.svg"); ?>
						
							</a>
					
							<a class="sm" href="<?php the_field('spanish_twitter','option'); ?>" target="_blank" rel="noopener">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/twitter.svg"); ?>
						
							</a>
					
							<a class="sm" href="<?php the_field('spanish_linkedin','option'); ?>" target="_blank" rel="noopener">
						
								<?php echo file_get_contents("wp-content/themes/torgenson/images/linkedin.svg"); ?>
						
							</a>
					
						</div><!-- social_wrapper -->
						
					</div><!-- contact_location_col -->
					
				</div><!-- contact_locations -->
					
					
					
					<?php else: ?>
					
					
					<div class="contact_locations">
					
					<div class="contact_location_col">
						
						<span class="contact_header"><?php the_field( 'footer_address_title','option'); ?></span><!-- contact_header -->
						
						<span class="contact_item"><?php the_field( 'footer_address','option'); ?></span><!-- contact_item -->
						
						<a class="contact_button" href="<?php the_field( 'google_map_link','option'); ?>">
							
							<div class="contact_button_inner">
							
								<span><?php the_field( 'directions_verbiage','option'); ?></span> 							
								<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
							
							</div><!-- contact_button_inner -->
							
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
	
				
				<?php endif;?>
				
				
				
			</div><!-- contact_top_content -->
			
		</div><!-- contact_top_content_wrapper -->
		
		<?php $contact_background = get_field( 'contact_background' ); ?>
		
		<?php if ( $contact_background ) { ?>
			
			<img class="contact_top_img" src="<?php echo $contact_background['url']; ?>" alt="<?php echo $contact_background['alt']; ?>" />
		
		<?php } ?>
		
	</div><!-- contact_top -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>