	<div class="internal_banner">
		
		<div class="internal_banner_content">
			
			<?php if(get_field('spanish_header_and_footer') || is_singular('espanol') ) : ?>
			
			
				<?php if(get_field('spanish_internal_banner_subtitle')) : ?>
				
						<span class="banner_subtitle"><?php the_field('spanish_internal_banner_subtitle'); ?></span><!-- banner_subtitle -->
				
					<?php else: ?>
			
						<span class="banner_subtitle"><?php the_field('spanish_global_banner_subtitle','option'); ?></span><!-- banner_subtitle -->
			
				<?php endif ?>
			
				<?php if(get_field('spanish_internal_banner_title')) : ?>
			
					<?php if(get_field('spanish_turn_banner_title_into_h1') == "Yes") : ?>
				
							<h1 class="banner_title"><?php the_field('spanish_internal_banner_title'); ?></h1><!-- banner_title -->
				
						<?php else: ?>
				
							<span class="banner_title"><?php the_field('spanish_internal_banner_title'); ?></span><!-- banner_title -->
				
					<?php endif;?>
				
				<?php else: ?>
				
					<?php if(get_field('spanish_turn_banner_title_into_h1') == "Yes") : ?>
				
							<h1 class="banner_title"><?php the_field('spanish_global_banner_title','option'); ?></h1><!-- banner_title -->
				
						<?php else: ?>
				
							<span class="banner_title"><?php the_field('spanish_global_banner_title','option'); ?></span><!-- banner_title -->
				
					<?php endif ?>
				
				<?php endif ?>
			
			
			<?php else:?>
			
				<?php if(get_field('internal_banner_subtitle')) : ?>
				
						<span class="banner_subtitle"><?php the_field( 'internal_banner_subtitle'); ?></span><!-- banner_subtitle -->
				
					<?php else: ?>
			
						<span class="banner_subtitle"><?php the_field( 'global_banner_subtitle','option'); ?></span><!-- banner_subtitle -->
			
				<?php endif ?>
			
				<?php if(get_field('internal_banner_title')) : ?>
			
					<?php if(get_field('turn_banner_title_into_h1') == "Yes") : ?>
				
							<h1 class="banner_title"><?php the_field( 'internal_banner_title'); ?></h1><!-- banner_title -->
				
						<?php else: ?>
				
							<span class="banner_title"><?php the_field( 'internal_banner_title'); ?></span><!-- banner_title -->
				
					<?php endif;?>
				
				<?php else: ?>
				
				<?php if(get_field('turn_banner_title_into_h1') == "Yes") : ?>
				
					<h1 class="banner_title"><?php the_field( 'global_banner_title','option'); ?></h1><!-- banner_title -->
				
					<?php else: ?>
				
					<span class="banner_title"><?php the_field( 'global_banner_title','option'); ?></span><!-- banner_title -->
				
				<?php endif ?>
				
			<?php endif ?>
			
		
		<?php endif;?>
		
		
	
			
				<a class="banner_button" href="#consultation">
					
					<?php if(get_field('spanish_header_and_footer') || is_singular('espanol') ) : ?>
					
						<span><?php the_field( 'spanish_banner_button_verbiage','option'); ?></span>
					
					<?php else:?>
					
						<span><?php the_field( 'banner_button_verbiage','option'); ?></span>
					
					<?php endif;?>
				
				</a><!-- banner_button -->
			
		
			
			
			
		</div><!-- internal_banner_content -->
		
		<?php $internal_banner_image = get_field( 'internal_banner_image'); ?>
		
		<?php $global_banner_image = get_field( 'global_banner_image','option'); ?>
		
		<?php $spanish_internal_banner_image = get_field( 'spanish_internal_banner_image' ); ?>


		<?php if(get_field('spanish_header_and_footer') || is_singular('espanol') ) : ?>
		
		
			<?php if ( $spanish_internal_banner_image ) : ?>
		
				<img class="banner_image" src="<?php echo $spanish_internal_banner_image['url']; ?>" alt="<?php echo $spanish_internal_banner_image['alt']; ?>" />

				<?php else:?>
		
				<img class="banner_image" src="<?php echo $global_banner_image['url']; ?>" alt="<?php echo $global_banner_image['alt']; ?>" />

			<?php endif;?>
		
		<?php else:?>
		
		
		<?php if ( $internal_banner_image ) : ?>
		
				<img class="banner_image" src="<?php echo $internal_banner_image['url']; ?>" alt="<?php echo $internal_banner_image['alt']; ?>" />

			<?php else:?>
		
				<img class="banner_image" src="<?php echo $global_banner_image['url']; ?>" alt="<?php echo $global_banner_image['alt']; ?>" />

		<?php endif;?>
		
		
		<?php endif;?>
		
				
	</div><!-- internal_banner -->