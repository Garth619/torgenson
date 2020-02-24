<section id="section_four">
	
	<div class="sec_four_inner">
		
		<div class="sec_four_left">
			
			<span class="sec_four_title"><?php the_field( 'section_four_header' ); ?></span><!-- sec_four_title -->
			
			<div class="sec_four_content content">
				
				<?php the_field( 'section_four_content' ); ?>
				
			</div><!-- sec_four_content -->
			
		</div><!-- sec_four_left -->
		
		<div class="sec_four_right">
			
			<div class="sec_four_img_wrapper">
				
				<div class="sec_four_img_left">
				
					<div class="sec_four_img sec_four_img_one">
						
						<picture>
						
							<?php $sec_four_image_one_desktop = get_field( 'sec_four_image_one_desktop' ); ?>
							
							<?php $sec_four_image_one_mobile = get_field( 'sec_four_image_one_mobile' ); ?>

							<source media="(max-width: 1480px)" srcset="<?php echo $sec_four_image_one_mobile['url']; ?>">
					
							<img src="<?php echo $sec_four_image_one_desktop['url']; ?>" alt="<?php echo $sec_four_image_one_desktop['alt']; ?>" />
						
						</picture>
					
					</div><!-- sec_four_img -->
				
				</div><!-- sec_four_img_left -->
				
				<div class="sec_four_img_right">
				
					<div class="sec_four_img sec_four_img_two">
						
						<picture>
						
							<?php $section_four_image_two_desktop = get_field( 'section_four_image_two_desktop' ); ?>
							
							<?php $sec_four_image_two_mobile = get_field( 'sec_four_image_two_mobile' ); ?>

							<source media="(max-width: 1480px)" srcset="<?php echo $sec_four_image_two_mobile['url']; ?>">
							
							<img src="<?php echo $section_four_image_two_desktop['url']; ?>" alt="<?php echo $section_four_image_two_desktop['alt']; ?>" />
						
						</picture>
					
					</div><!-- sec_four_img -->
				
					<div class="sec_four_img sec_four_img_three">
						
						<picture>
						
							<?php $section_four_image_three_desktop = get_field( 'section_four_image_three_desktop' ); ?>
							
							<?php $sec_four_image_three_mobile = get_field( 'sec_four_image_three_mobile' ); ?>

							<source media="(max-width: 1480px)" srcset="<?php echo $sec_four_image_three_mobile['url']; ?>">
					
							<img src="<?php echo $section_four_image_three_desktop['url']; ?>" alt="<?php echo $section_four_image_three_desktop['alt']; ?>" />
						
						</picture>
					
					</div><!-- sec_four_img -->
				
				</div><!-- sec_four_img_right -->
				
			</div><!-- sec_four_img_wrapper -->
			
		</div><!-- sec_four_right -->
		
	</div><!-- sec_four_inner -->
	
</section><!-- section_four -->