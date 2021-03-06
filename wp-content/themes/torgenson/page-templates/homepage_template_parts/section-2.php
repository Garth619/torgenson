<section id="section_two">
	
	<div class="sec_two_inner">
		
		<span class="sec_two_title"><?php the_field( 'section_two_header' ); ?></span><!-- sec_two_title -->
		
		<div class="sec_two_intro">
			
			<?php the_field( 'section_two_intro' ); ?>
						
		</div><!-- sec_two_intro -->
		
		<div class="sec_two_inner_content content">
			
			<div class="sec_two_col">
				
				<?php the_field( 'section_two_column_one' ); ?>
								
			</div><!-- sec_two_col -->
			
			<div class="sec_two_col">
				
				<?php the_field( 'section_two_column_two' ); ?>
				
			</div><!-- sec_two_col -->
			
		</div><!-- sec_two_inner_content -->
		
		<div class="sec_two_bottom_content">
			
			<?php if(get_field('section_two_header')) { ?>
		
				<span class="sec_two_title"><?php the_field( 'section_two_bottom_header' ); ?></span><!-- sec_two_title -->
			
			<?php } ?>
		
			<div class="sec_two_intro">
			
				<?php the_field( 'section_two_bottom_intro' ); ?>
						
			</div><!-- sec_two_intro -->
			
				<div class="sec_two_inner_content content">
			
			<div class="sec_two_col">
				
				<?php the_field( 'section_two_column_one_bottom' ); ?>
								
			</div><!-- sec_two_col -->
			
			<div class="sec_two_col">
				
				<?php the_field( 'section_two_column_two_bottom' ); ?>
				
			</div><!-- sec_two_col -->
			
				</div><!-- sec_two_inner_content -->

		
		</div><!-- sec_two_bottom_content -->
		
	</div><!-- sec_two_inner -->
	
</section><!-- section_two -->