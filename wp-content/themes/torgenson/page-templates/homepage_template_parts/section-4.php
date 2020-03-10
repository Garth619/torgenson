<section id="section_four">
	
	<div class="sec_four_inner">
		
		<div class="sec_four_left">
			
			<?php if(get_field('section_four_header')) { ?>
			
				<span class="sec_four_title"><?php the_field( 'section_four_header' ); ?></span><!-- sec_four_title -->
			
			<?php } ?>
			
			<div class="sec_four_content content">
				
				<span class="h2">How much is my case worth?</span>

				<p>Unfortunately, there is no exact "formula" to determine the value of a claim. However, the primary function of a personal injury lawyer is to evaluate and analyze multiple factors in order to determine the value of your specific case. Those factors include:</p> 	
	<ul>
	<li>The severity of your injury. </li>
	<li>The total value of your medical bills and projected costs of future healthcare. </li> 
	<li>The extent to which your injury has impacted your future.  </li>
	<li>The amount of expenses incurred as a result of the injury, such as hospital and medical bills, rehabilitation costs, prescription drug costs, lost wages and lost earning capacity. </li> 
	<li>The physical and emotional pain and suffering you have and are experiencing.</li>
	<li>The percentage you are found to be at-fault. </li> 
	</ul>

	<span class="h2">What damages can I recover in a personal injury claim?</span>

	<p>The type of damages you can recover in a personal injury lawsuit varies on a case-by-case basis. Generally, this may include:</p>
	<ul>
	<li>The cost of medical bills</li>
	<li>Lost wages - any income lost due to injury or treatment of the injury</li>
	<li>Pain and suffering</li>
	<li>Wrongful death</li>
	<li>Loss of companionship - compensation for those who may have lost a spouse or significant other as a result</li>
	<li>Any punitive damages in cases of gross negligence</li>
	</ul>

	<p>An experienced personal injury attorney can work with you to ensure you receive the maximum possible compensation for your needs.</p>
				
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
					
							<img data-src="<?php echo $sec_four_image_one_desktop['url']; ?>" alt="<?php echo $sec_four_image_one_desktop['alt']; ?>" />
						
						</picture>
						
					</div><!-- sec_four_img -->
				
				</div><!-- sec_four_img_left -->
				
				<div class="sec_four_img_right">
				
					<div class="sec_four_img sec_four_img_two">
						
						<picture>
						
							<?php $section_four_image_two_desktop = get_field( 'section_four_image_two_desktop' ); ?>
							
							<?php $sec_four_image_two_mobile = get_field( 'sec_four_image_two_mobile' ); ?>

							<source media="(max-width: 1480px)" srcset="<?php echo $sec_four_image_two_mobile['url']; ?>">
							
							<img data-src="<?php echo $section_four_image_two_desktop['url']; ?>" alt="<?php echo $section_four_image_two_desktop['alt']; ?>" />
						
						</picture>
					
					</div><!-- sec_four_img -->
				
					<div class="sec_four_img sec_four_img_three">
						
						<picture>
						
							<?php $section_four_image_three_desktop = get_field( 'section_four_image_three_desktop' ); ?>
							
							<?php $sec_four_image_three_mobile = get_field( 'sec_four_image_three_mobile' ); ?>

							<source media="(max-width: 1480px)" srcset="<?php echo $sec_four_image_three_mobile['url']; ?>">
					
							<img data-src="<?php echo $section_four_image_three_desktop['url']; ?>" alt="<?php echo $section_four_image_three_desktop['alt']; ?>" />
						
						</picture>
					
					</div><!-- sec_four_img -->
				
				</div><!-- sec_four_img_right -->
				
			</div><!-- sec_four_img_wrapper -->
			
		</div><!-- sec_four_right -->
		
	</div><!-- sec_four_inner -->
	
	<div class="sec_four_bottom_content">
		
		<span class="sec_four_bottom_title"><?php the_field( 'section_four_bottom_header' ); ?></span><!-- sec_four_bottom_title -->
		
		<div class="sec_four_bottom_inner content">
			
			<div class="sec_four_col">
				
				<?php the_field( 'section_four_column_one' ); ?>
				
			</div><!-- sec_four_col -->
			
				<div class="sec_four_col">
					
					<?php the_field( 'section_four_column_two' ); ?>
					
				</div><!-- sec_four_col -->
			
		</div><!-- sec_four_bottom_inner -->
		
	</div><!-- sec_four_bottom_content -->
	
</section><!-- section_four -->