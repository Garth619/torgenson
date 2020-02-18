<footer id="footer_trigger">
	
	<div id="consultation" class="form_wrapper">
		
		<div class="form_inner">
		
			<span class="form_subheader">When you are hurt, you need lawyers who will have your back every single step of the way.</span><!-- form_subheader -->
		
			<span class="request_title">Request your free consultation</span><!-- request_title -->
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			<span class="required"><span>*</span> Required Field</span>
		
		</div><!-- form_inner -->
		
	</div><!-- form_wrapper -->
	
	<div class="location_info">
		
		<div class="location_inner">
			
			<div class="location_left">
			
			<div class="location_col">
				
				<span class="location_title">Torgenson Law</span><!-- location_title -->
				
				<span class="location_header">Address</span><!-- location_header -->
				
				<span class="location_content">333 West Roosevelt Street<br/> Phoenix, AZ 85003</span><!-- location_content -->
				
				<a class="get_directions_button" href="">
				
					<span>Directions</span>
				
					<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
				
				</a><!-- get_directions_button -->
				
			</div><!-- location_col -->
			
			<div class="location_col">
				
				<span class="location_header">Phone Number</span><!-- location_header -->
				
				<a class="location_content" href="tel:6028332774">602.833.2774</a><!-- location_content -->
				
				<span class="location_header office_hours_title">Office Hours</span><!-- location_header -->
				
				<span class="location_content">Mon-Fri 8:00am - 5:00pm</span><!-- location_content -->
				
				<span class="location_header social_title">Social</span><!-- location_header -->
				
				<div class="social_wrapper">
					
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
				
			</div><!-- location_col -->
			
			</div><!-- location_left -->
			
		</div><!-- location_inner -->
		
		<div class="footer_phoenix_cutout">
			
			<div class="footer_phoenix_spacer footer_phoenix_spacer_one"></div><!-- footer_phoenix_spacer -->
			
			<img class="footer_phoenix_cutout_img" src="<?php bloginfo('template_directory');?>/images/pheonix-cutout-2.svg"/>
			
		</div><!-- footer_phoenix_cutout -->
		
	</div><!-- location_info -->
	
	<div class="copyright_wrapper">
		
		<div class="copyright_inner">
			
			<ul>
				<li>Copyright <?php echo date("Y"); ?> &copy; Torgenson Law</li>
				<li><a href="">Privacy Policy</a></li>
				<li><a href="">Disclaimer</a></li>
			</ul>
			
			<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
				
				<img src="<?php bloginfo('template_directory');?>/images/ilawyer-logo.svg"/>
				
			</a><!-- ilawyer -->
			
		</div><!-- copyright_inner -->
		
	</div><!-- copyright_wrapper -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
