<?php get_header(); ?>

<div id="internal_main">
	
	<?php get_template_part( 'page-templates/template', 'banner' ); ?>
	
	<div class="page_container">
		
		<div class="page_inner_container">
			
			<?php get_sidebar('blog'); ?>
			
			<div class="page_content content">
				
				<h1 class="page_header"><?php the_title();?></h1>
				
				<?php get_template_part( 'loop', 'single' ); ?>
				
			</div><!-- page_content -->
			
		</div><!-- page_inner_container -->
		
	</div><!-- page_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>




