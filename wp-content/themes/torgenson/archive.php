<?php get_header(); ?>

<div id="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'banner' ); ?>
	
	<div class="page_container">
		
		<div class="page_inner_container">
			
			<?php get_sidebar('blog'); ?>
			
			<div class="page_content content">
				
			<?php	if ( have_posts() ) the_post();?>
				
				<h1 class="page_header">
					
					<?php if ( is_day() ) : ?>
						
						<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
					
					<?php elseif ( is_month() ) : ?>
						
						<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
					
					<?php elseif ( is_year() ) : ?>
						
						<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
					
					<?php else : ?>
					
					<?php _e( 'Blog Archives', 'twentyten' ); ?>
					
				<?php endif; ?>
			
			</h1>

			<?php rewind_posts();?>

			<?php get_template_part( 'loop', 'index' ); ?>
				
			</div><!-- page_content -->
			
		</div><!-- page_inner_container -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->


<?php get_footer(); ?>


