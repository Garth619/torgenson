<?php 

/* Template Name: PA Directory */

get_header(); ?>

	<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title"><?php the_title();?></h1><!-- internal_title -->
		
		<div class="pa_directory_wrapper">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
		</div><!-- pa_directory_wrapper -->
		
	</div><!-- internal_container -->
	
	
</div><!-- internal_main -->
		
<?php get_footer(); ?>
