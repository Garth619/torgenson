<?php get_header(); ?>


<div id="internal_main">
	
	
	<div class="internal_banner">
		
		<div class="internal_banner_content">
			
			<span class="banner_subtitle">Phoenix Personal Injury Attorneys</span><!-- banner_subtitle -->
			
			<span class="banner_title">100% dedicated to helping good people who are hurt.</span><!-- banner_title -->
			
			<a class="banner_button" href="#consultation">
				
				<span>Request Free Consultation</span>
				
			</a><!-- banner_button -->
			
		</div><!-- internal_banner_content -->
		
		<img class="banner_image" src="<?php bloginfo('template_directory');?>/images/internal-header.jpg"/>
		
	</div><!-- internal_banner -->
	
	<div class="page_container">
		
		<div class="page_inner_container">
			
			<?php get_sidebar(); ?>
			
			<div class="page_content content">
				
				<?php //get_template_part( 'loop', 'page' ); ?>
				
			</div><!-- page_content -->
			
		</div><!-- page_inner_container -->
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
	



<?php get_footer(); ?>
