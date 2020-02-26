<footer id="footer_trigger">
	
	<div id="consultation" class="form_wrapper">
		
		<div class="form_inner">
		
			<span class="form_subheader"><?php the_field( 'footer_form_subtitle','option'); ?></span><!-- form_subheader -->
		
			<span class="request_title"><?php the_field( 'footer_largeheader','option'); ?></span><!-- request_title -->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			<span class="required"><span>*</span> Required Field</span>
		
		</div><!-- form_inner -->
		
	</div><!-- form_wrapper -->
	
	<?php if(!is_page_template('page-templates/template-contact.php')) {?>
	
	<div class="location_info">
		
		<div class="location_inner">
			
			<div class="location_left">
			
			<div class="location_col">
				
				<span class="location_title"><?php the_field( 'footer_firm_name','option'); ?></span><!-- location_title -->
				
				<span class="location_header"><?php the_field( 'footer_address_title','option'); ?></span><!-- location_header -->
				
				<span class="location_content"><?php the_field( 'footer_address','option'); ?></span><!-- location_content -->
				
				<a class="get_directions_button" href="<?php the_field( 'google_map_link','option'); ?>" target="_blank" rel="noopener">
					
					<div class="get_directions_button_inner">
				
						<span>Directions</span>
				
						<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
					
					</div><!-- get_directions_button_inner -->
				
				</a><!-- get_directions_button -->
				
			</div><!-- location_col -->
			
			<div class="location_col">
				
				<span class="location_header"><?php the_field( 'footer_phone_title','option'); ?></span><!-- location_header -->
				
				<a class="location_content" href="tel:<?php echo str_replace(['-', '.', '(', ')', ' '], '', get_field('footer_phone', 'option')); ?>"><?php the_field( 'footer_phone','option'); ?></a><!-- location_content -->
				
				<span class="location_header office_hours_title"><?php the_field( 'footer_office_hours_title','option'); ?></span><!-- location_header -->
				
				<span class="location_content"><?php the_field( 'footer_office_hours','option'); ?></span><!-- location_content -->
				
				<span class="location_header social_title"><?php the_field( 'footer_social_title','option'); ?></span><!-- location_header -->
				
				<div class="social_wrapper">
					
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
				
			</div><!-- location_col -->
			
			</div><!-- location_left -->
			
		</div><!-- location_inner -->
		
		<div class="footer_phoenix_cutout">
			
			<div class="footer_phoenix_spacer footer_phoenix_spacer_one"></div><!-- footer_phoenix_spacer -->
			
			<picture>
			
				<source media="(max-width: 1066px)" srcset="">
				
				<img class="footer_phoenix_cutout_img" src="<?php bloginfo('template_directory');?>/images/pheonix-cutout-2.svg"/>
			
			</picture>
			
		</div><!-- footer_phoenix_cutout -->
		
	</div><!-- location_info -->
	
	<?php } ?>
	
	<div class="copyright_wrapper">
		
		<div class="copyright_inner">
			
			<ul>
				<li>Copyright <?php echo date("Y"); ?> &copy; <?php the_field( 'copyright_veribiage','option'); ?></li>
				
				<?php if(get_field('privacy_policy','option')) {?>
					
					<li><a href="<?php the_field( 'privacy_policy','option'); ?>">Privacy Policy</a></li>
				
				<?php } ?>
				
				<?php if(get_field('disclaimer','option')) {?>
					
					<li><a href="<?php the_field( 'disclaimer','option'); ?>">Disclaimer</a></li>
				
				<?php } ?>
				
			</ul>
			
			<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
				
				<img data-src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/>
				
			</a><!-- ilawyer -->
			
		</div><!-- copyright_inner -->
		
	</div><!-- copyright_wrapper -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
