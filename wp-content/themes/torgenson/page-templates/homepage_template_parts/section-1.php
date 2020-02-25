<section id="section_one">
	
	<div class="sec_one_top">
		
		<div class="sec_one_top_inner">
			
			<div class="sec_one_top_row">
				
				<div class="sec_one_top_row_left">
					
					<span class="sec_one_subheader"><?php the_field( 'section_one_subheader' ); ?></span><!-- sec_one_subheader -->
					
					<span class="sec_one_largeheader"><?php the_field( 'section_one_large_header' ); ?></span><!-- sec_one_largeheader -->
					
					<a class="request_button" href="#consultation">
						
						<span>Request Free Consultation</span>
					
					</a><!-- request_button -->
					
				</div><!-- sec_one_top_row_left -->
				
				<div class="sec_one_top_row_right">
					
					<div class="sec_one_video_wrapper sec_one_right_box">
						
						<div class="sec_one_wistia wistia_embed wistia_async_<?php the_field( 'section_one_wistia_id' ); ?> popover=true popoverContent=html"></div><!-- sec_one_wistia -->
						
						<div class="sec_one_video_inner">
														
							<picture>
							
								<?php $section_one_video_thumbnail_desktop = get_field( 'section_one_video_thumbnail_desktop' ); ?>
								
								<?php $section_one_video_thumbnail_mobile = get_field( 'section_one_video_thumbnail_mobile' ); ?>

								<source media="(max-width: 700px)" srcset="<?php echo $section_one_video_thumbnail_mobile['url']; ?>">
							
								<img src="<?php echo $section_one_video_thumbnail_desktop['url']; ?>" alt="<?php echo $section_one_video_thumbnail_desktop['alt']; ?>" />
							
							</picture>
							
							<div class="sec_one_video_overlay">
								
								<div class="play_button">
									
									<span></span>
									
								</div><!-- play_button -->
								
								<div class="video_cap_wrapper">
								
									<span class="video_cap"><?php the_field( 'section_one_video_caption' ); ?></span><!-- video_ca -->
								
								</div><!-- video_cap_wrapper -->
								
							</div><!-- sec_one_video_overlay -->
							
						</div><!-- sec_one_video_inner -->
						
					</div><!-- sec_one_video_wrapper -->
					
					<div class="sec_one_testi_wrapper sec_one_right_box">
						
						<div class="sec_one_testi_slider">
							
							<?php if(get_field('section_one_reviews_slide')): ?>
							 
								<?php while(has_sub_field('section_one_reviews_slide')): ?>
							 
									<div class="sec_one_testi_slide">
								
										<img class="stars" src="<?php bloginfo('template_directory');?>/images/stars.svg"/>
								
										<img class="quote" src="<?php bloginfo('template_directory');?>/images/quotemark.svg"/>
								
										<span class="description"><?php the_sub_field( 'description' ); ?></span>
								
										<span class="name"><?php the_sub_field( 'name' ); ?></span>
								
										<span class="client"><?php the_sub_field( 'type' ); ?></span>
								
									</div><!-- sec_one_testi_slide -->
							    
								<?php endwhile; ?>
							 
							<?php endif; ?>
														
						</div><!-- sec_one_testi_slider -->
						
						<div class="test_arrows">
							
							<div class="test_arrow_left test_arrow">
								
								<div class="arrow">
									
									<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
								
								</div><!-- arrow -->
								
								<span class="arrow_circle"></span><!-- arrow_circle -->
								
							</div><!-- test_arrow_left -->
							
							<div class="test_arrow_right test_arrow">
								
								<div class="arrow">
									
									<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
								
								</div><!-- arrow -->
								
								<span class="arrow_circle"></span><!-- arrow_circle -->
								
							</div><!-- test_arrow_right -->
							
							<div class="test_arrow_right"></div><!-- test_arrow_right -->
							
						</div><!-- test_arrows -->
						
					</div><!-- sec_one_testi_wrapper -->
					
				</div><!-- sec_one_top_row_right -->
				
			</div><!-- sec_one_top_row -->
			
		</div><!-- sec_one_top_inner -->
		
		<div class="sec_one_sp magikline">
			
			<span class="why_choose"><?php the_field( 'section_one_why_choose_us' ); ?></span><!-- why_choose -->
			
			<ul class="sp_slider">
				
				<?php if(get_field('section_one_selling_points')): ?>
				 
					<?php while(has_sub_field('section_one_selling_points')): ?>
				 
						<li class="<?php the_sub_field( 'class' ); ?>"><!-- Active class needed? -->
							<a>
								<span class="roman_num"><?php the_sub_field( 'number' ); ?></span>
								<span class="description"><?php the_sub_field( 'description' ); ?></span>
							</a>
						</li>
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				
				
			</ul>
			
			<div class="sp_arrows">
				
				<div class="sp_arrow_left sp_arrow">
					
					<div class="sp_arrow_inner">
								
						<div class="arrow">
									
							<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
								
						</div><!-- arrow -->
								
						<span class="arrow_circle"></span><!-- arrow_circle -->
					
					</div><!-- sp_arrow_inner -->
								
				</div><!-- sp_arrow_left -->
							
				<div class="sp_arrow_right sp_arrow">
					
					<div class="sp_arrow_inner">
								
						<div class="arrow">
									
							<?php echo file_get_contents("wp-content/themes/torgenson/images/arrow.svg"); ?>
								
						</div><!-- arrow -->
								
						<span class="arrow_circle"></span><!-- arrow_circle -->
					
					</div><!-- sp_arrow_inner -->
								
				</div><!-- sp_arrow_right -->
							
				<div class="sp_arrow_right"></div><!-- sp_arrow_right -->
				
			</div><!-- sp_arrows -->
			
		</div><!-- sec_one_sp -->
		
		<picture>
		
			<?php $section_one_bg = get_field( 'section_one_bg' ); ?>
			
			<?php $section_one_bg_tablet = get_field( 'section_one_bg_tablet' ); ?>

			<source media="(max-width: 1150px)" srcset="<?php echo $section_one_bg_tablet['url']; ?>">
		
			<img class="hero" src="<?php echo $section_one_bg['url']; ?>" alt="<?php echo $section_one_bg['alt']; ?>"/>
		
		</picture>
		
	</div><!-- sec_one_top -->
	
	<div class="sec_one_bottom">
		
		
		
		<div class="phoenix_cutout">
			
			<div class="pheonix_spacer pheonix_spacer_one"></div><!-- pheonix_spacer -->
			
			<img class="phoenix_cutout_img" src="<?php bloginfo('template_directory');?>/images/pheonix-cutout-2.svg"/>
			
			<div class="pheonix_spacer pheonix_spacer_two"></div><!-- pheonix_spacer -->
			
		</div><!-- phoenix_cutout -->
		
		<div class="sec_bottom_bg">
			 
			 <div class="sec_bottom_inner">
				 
				 <div class="sec_bottom_left content">
					 
					 <h1 class="sec_one_h1"><?php the_field( 'section_one_header' ); ?></h1><!-- sec_one_h1 -->
					 
					 <div class="sec_one_intro">
						 
						 <?php the_field( 'section_one_intro' ); ?>
						 
					 </div><!-- sec_one_intro -->
					 
					 <div class="sec_one_left_content">
						 
						 <?php the_field( 'section_one_content' ); ?>
						 
					 </div><!-- sec_one_left_content -->
					 
					</div><!-- sec_bottom_left -->
				 
				</div><!-- sec_bottom_inner -->
			
		</div><!-- sec_bottom_bg -->
		
	</div><!-- sec_one_bottom -->
	
</section><!-- section_one -->

