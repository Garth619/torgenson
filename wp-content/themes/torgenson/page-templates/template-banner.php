	<div class="internal_banner">
		
		<div class="internal_banner_content">
			
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
			
			<?php if(!get_field('turn_off_banner_button')) { ?>
			
				<a class="banner_button" href="#consultation">
				
					<span>Request Free Consultation</span>
				
				</a><!-- banner_button -->
			
			<?php } ?>
			
		</div><!-- internal_banner_content -->
		
		<?php $global_banner_image = get_field( 'global_banner_image','option'); ?>
		
		<?php if ( $global_banner_image ) { ?>
			
			<img class="banner_image" src="<?php echo $global_banner_image['url']; ?>" alt="<?php echo $global_banner_image['alt']; ?>" />
		
		<?php } ?>
		
	</div><!-- internal_banner -->