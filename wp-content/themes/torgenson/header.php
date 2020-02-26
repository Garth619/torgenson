<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<link href="https://fonts.googleapis.com/css?family=Rufina:700|Source+Sans+Pro:400,600,700,900&display=swap" rel="stylesheet">

<style>


<?php the_field( 'review_css','option'); ?>


</style>

<?php wp_head(); ?>

<?php the_field('schema_code', 'option'); ?>

<?php the_field('analytics_code', 'option'); ?>

</head>

<body <?php body_class(); ?>>
	
	
	<header>
		
		<div class="header_inner">
		
		<div class="header_left">
			
			<a href="<?php bloginfo('url');?>">
				
				<?php $logo = get_field( 'logo','option'); ?>
				
				<?php if ( $logo ) { ?>
					
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
				
				<?php } ?>
				
			</a>
			
		</div><!-- header_left -->
		
		<div class="header_right">
			
			<nav class="nav_desktop">
				
				<div class="close"></div><!-- close -->
				
				
				<?php if(get_field('spanish_navigation')) : ?>
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'spanish_menu' ) ); ?>
				
				<?php else:?>
				
				<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
				
				<?php endif;?>
			
			</nav>
			
			<div class="free_consultation">
				
				<span class="free_consult_title"><?php the_field( 'free_consultation_verbiage','option'); ?></span><!-- free_consult_title -->
				
				<a class="phone" href="tel:<?php echo str_replace(['-', '.', '(', ')', ' '], '', get_field('header_phone', 'option')); ?>"><?php the_field( 'header_phone','option'); ?></a>
				
			</div><!-- free_consultation -->
			
		</div><!-- header_right -->
		
		<div class="mobile_menu">
			<span></span>
			<span></span>
			<span></span>
		</div><!-- mobile_menu -->
		
		</div><!-- header_inner -->
		
	</header>
	
	<?php $section_one_phoenix_background = get_field( 'section_one_phoenix_background',10 ); ?>
	
	<?php if ( $section_one_phoenix_background ) { ?>
		
		<img class="hero_bottom" data-src="<?php echo $section_one_phoenix_background['url']; ?>" alt="<?php echo $section_one_phoenix_background['alt']; ?>" />
	
	<?php } ?>
				
	

			