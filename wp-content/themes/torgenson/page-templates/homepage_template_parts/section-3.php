<section id="section_three">
	
	<?php echo file_get_contents("wp-content/themes/torgenson/images/phoenix-desktop.svg"); ?>
	
	<div class="sec_three_inner">
		
		<div class="sec_three_left">
			
			<span class="sec_three_cr_title"><?php the_field( 'section_three_header' ); ?></span><!-- sec_three_cr_title -->
			
			<a class="sec_three_button desktop" href="<?php the_field( 'section_three_view_all_results_link' ); ?>">
				
				<div class="sec_three_button_inner">
				
					<span><?php the_field( 'section_three_view_all_verbiage' ); ?></span>
				
					<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
				
				</div><!-- sec_three_button_inner -->
				
			</a><!-- sec_three_button -->
			
		</div><!-- sec_three_left -->
		
		<div class="sec_three_right">
			
			<div class="sec_three_cr magikline">
				
				<div class="sec_three_arrow sec_three_arrow_left">
					
					<div class="sec_three_arrow_inner">
					
						<div class="arrow">
						
							<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
						
						</div><!-- arrow -->
					
						<span class="arrow_circle"></span>
					
					</div><!-- sec_three_arrow_inner -->
					
				</div><!-- sec_three_arrow_left -->
				
				<ul class="sec_three_slider">
					
					<?php if(get_field('section_three_case_results')): ?>
					 
						<?php while(has_sub_field('section_three_case_results')): ?>
					 
							<li class="<?php the_sub_field( 'class' ); ?>">
								<a>
									<span class="cr_title"><?php the_sub_field( 'type' ); ?></span><!-- cr_title -->
									<span class="cr_amount"><?php the_sub_field( 'amount' ); ?></span><!-- cr_amount -->
									<span class="cr_description"><?php the_sub_field( 'description' ); ?>a</span><!-- cr_description -->
								</a>
							</li>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
					
				</ul>
				
				<div class="sec_three_arrow sec_three_arrow_right">
					
					<div class="sec_three_arrow_inner">
						
						<div class="arrow">
						
							<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
						
						</div><!-- arrow -->
					
						<span class="arrow_circle"></span>
						
					</div><!-- sec_three_arrow_inner -->
					
				</div><!-- sec_three_arrow_right -->
				
			</div><!-- sec_three_cr -->
			
		</div><!-- sec_three_right -->
		
		<a class="sec_three_button mobile" href="<?php the_field( 'section_three_view_all_results_link' ); ?>">
				
			<div class="sec_three_button_inner">
				
					<span><?php the_field( 'section_three_view_all_verbiage' ); ?></span>
				
					<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
				
				</div><!-- sec_three_button_inner -->
				
		</a><!-- sec_three_button -->
		
	</div><!-- sec_three_inner -->
	
</section><!-- section_three -->