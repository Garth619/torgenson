<?php 

/* Template Name: Video Center */

get_header(); ?>

<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="video_wrapper">
			
			<?php if(get_field('video_center')): ?>
			 
				<?php while(has_sub_field('video_center')): ?>
				
					<div class="single_video">
						
						<?php if(get_sub_field('wistia_or_youtube_video') == "Youtube") { ?>
						
							<a href="https://www.youtube.com/embed/<?php the_sub_field( 'youtube_id' ); ?>" data-lity>
				
								<div class="single_video_thumbnail">
					
									<div class="single_video_thumb">
						
										<img class="youtube" src="https://img.youtube.com/vi/XBPjVzSoepo/0.jpg"/>
						
									</div><!-- single_youtube -->
					
									<div class="single_video_overlay">
						
										<div class="play_button">
									
											<span></span>
									
										</div><!-- play_button -->
						
									</div><!-- single_video_overlay -->
					
								</div><!-- single_video_thumbnail -->
				
								<div class="video_title_wrapper">
				
									<span class="video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
				
							</div><!-- video_title_wrapper -->
				
						</a>
						
						<?php } ?>
						
						<?php if(get_sub_field('wistia_or_youtube_video') == "Wistia") { ?>
				
							<div class="single_video_thumbnail">
					
								<div class="single_video_thumb wisita wistia_embed wistia_async_<?php the_sub_field( 'wistia_id' ); ?> popover=true popoverContent=thumbnail"></div><!-- mywisita -->
					
									<div class="single_video_overlay">
						
										<div class="play_button">
									
											<span></span>
									
										</div><!-- play_button -->
						
									</div><!-- single_video_overlay -->
					
								</div><!-- single_video_thumbnail -->
				
								<div class="video_title_wrapper">
				
									<span class="video_title"><?php the_sub_field( 'video_title' ); ?></span><!-- video_title -->
				
								</div><!-- video_title_wrapper -->
				
						<?php } ?>
					
					</div><!-- single_video -->
			 
				<?php endwhile; ?>
			 
			<?php endif; ?>
									
		</div><!-- video_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

<script src="https://fast.wistia.net/assets/external/E-v1.js" async></script>


<?php get_footer(); ?>

