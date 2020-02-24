<?php get_header(); ?>

<div id="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'banner' ); ?>
	
	<div class="page_container">
		
		<div class="page_inner_container">
			
			<?php get_sidebar(); ?>
			
			<div class="page_content content">
				
				<?php if(get_field('turn_banner_title_into_h1') == "Yes") : ?>
				
				<h2 class="page_header"><?php the_title();?></h2>
				
				<?php else:?>
				
				<h1 class="page_header"><?php the_title();?></h1>
				
				<?php endif;?>
				
				<?php get_template_part( 'loop', 'page' ); ?>
				
			</div><!-- page_content -->
			
		</div><!-- page_inner_container -->
		
	</div><!-- page_container -->
	
	
</div><!-- internal_main -->
	



<?php get_footer(); ?>
