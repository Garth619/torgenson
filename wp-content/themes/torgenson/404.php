<?php get_header(); ?>

<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<div class="not_found_wrapper">
			
			<span class="error_title"><?php the_field( 'not_subheader' ,'option'); ?></span><!-- error_title -->
			
			<h1 class="not_found_header internal_title"><?php the_field( 'not_found_header','option'); ?></h1>
		
			<div class="not_found_content">
				
				<?php the_field( 'not_found_verbiage','option'); ?>
				
			</div><!-- not_found_content -->
			
		</div><!-- not_found_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->





<?php get_footer(); ?>