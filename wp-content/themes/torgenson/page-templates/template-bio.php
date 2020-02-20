<?php 

/* Template Name: Att Bio */

get_header(); ?>

<div id="internal_main">
		
	<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<div class="att_bio_wrapper">
			
			<div class="att_bio_top">
				
				<div class="att_bio_left">
					
					<div class="att_profile_wrapper">
						
						<div class="att_profile_image">
							
							<img src="<?php bloginfo('template_directory');?>/images/attorney-torgenson.jpg"/>
							
						</div><!-- att_profile_image -->
						
					</div><!-- att_profile_wrapper -->
					
				</div><!-- att_bio_left -->
				
				<div class="att_bio_right">
					
					<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
					
					<span class="att_position">Managing Partner</span><!-- att_position -->
					
				</div><!-- att_bio_right -->
				
			</div><!-- att_bio_top -->
			
		</div><!-- att_bio_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>
