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
				
				
				
			</div><!-- location_col -->
			
		</div><!-- location_inner -->
		
	</div><!-- location_info -->
		
</footer>


<?php wp_footer();?>


</body>
</html>
