<?php 

/* Template Name: About */

get_header(); ?>

<div id="internal_main">
	
	<div class="about_top">
		
		<div class="about_top_content_wrapper">
			
			<h1 class="about_title"><?php the_title();?></h1><!-- about_title -->
			
			<div class="about_top_content">
				
				<?php the_field( 'top_section_intro_about' ); ?>
				
			</div><!-- about_top_content -->
			
		</div><!-- about_top_content_wrapper -->
		
		
		<?php $top_section_background = get_field( 'top_section_background' ); ?>
		
		<?php if ( $top_section_background ) { ?>
			
			<img class="about_top_img" src="<?php echo $top_section_background['url']; ?>" alt="<?php echo $top_section_background['alt']; ?>" />
		
		<?php } ?>
		
	</div><!-- about_top -->
	
	<div id="about_middle_trigger" class="about_middle">
		
		<div class="about_middle_content">
			
			<div class="about_middle_left content">
				
				<?php the_field( 'middle_section_content_about' ); ?>
				
			</div><!-- about_middle_left -->
			
			<div class="about_middle_right">
				
				<div class="about_middle_imge_wrapper">
					
					<div class="about_middle_img">
						
						<?php $middle_section_image_one = get_field( 'middle_section_image_one' ); ?>
						
						<?php if ( $middle_section_image_one ) { ?>
							
							<img src="<?php echo $middle_section_image_one['url']; ?>" alt="<?php echo $middle_section_image_one['alt']; ?>" />
						
						<?php } ?>
						
					
						
					</div><!-- about_middle_img -->
					
					<div class="about_middle_img">
						
						<?php $middle_section_image_two = get_field( 'middle_section_image_two' ); ?>
						
						<?php if ( $middle_section_image_two ) { ?>
							
							<img src="<?php echo $middle_section_image_two['url']; ?>" alt="<?php echo $middle_section_image_two['alt']; ?>" />
						
						<?php } ?>
						
					</div><!-- about_middle_img -->
					
				</div><!-- about_middle_imge_wrapper -->
				
			</div><!-- about_middle_right -->
			
		</div><!-- about_middle_content -->
		
	</div><!-- about_middle -->
	
	<div id="about_bottom_trigger" class="about_bottom">
		
		<div class="about_bottom_inner">
			
			<div class="about_bottom_left">
				
				<div class="about_bottom_left_img">
					
					<img src="<?php bloginfo('template_directory');?>/images/about-image3.jpg"/>
					
				</div><!-- about_bottom_left_img -->
				
			</div><!-- about_bottom_left -->
			
			<div class="about_bottom_right">
				
				<div class="about_right_quote_wrapper">
					
					<p><?php the_field( 'bottom_section_quote_about' ); ?></p>
					
					<span class="about_right_quote_name"><?php the_field( 'bottom_section_name' ); ?></span><!-- about_right_quote_name -->
					
				</div><!-- about_right_quote_wrapper -->
				
			</div><!-- about_bottom_right -->
			
		</div><!-- about_bottom_inner -->
		
	</div><!-- about_bottom -->
	
	<div class="about_awards_wrapper">
		
		<div class="about_awards_inner">
			
			<div class="about_awards_slider">
				
				<?php if(get_field('awards_slider_about')): ?>
				 
					<?php while(has_sub_field('awards_slider_about')): ?>
							
							
							<div class="about_awards_slide">
					
								<div class="about_awards_inner">
						
									<?php $logos = get_sub_field( 'logos' ); ?>
									
									<?php if ( $logos ) { ?>
										
										<img src="<?php echo $logos['url']; ?>" alt="<?php echo $logos['alt']; ?>" />
									
									<?php } ?>
							
								</div><!-- about_awards_inner -->
					
							</div><!-- about_awards_slide -->

						
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
			</div><!-- about_awards_slider -->
			
		</div><!-- about_awards_inner -->
		
	</div><!-- about_slider_wrapper -->
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
