<?php get_header(); ?>
	
	<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title">FAQs</h1><!-- internal_title -->
		
		<div class="faq_wrapper">
			
			<?php $custom_terms = get_terms('faq_type');

				foreach($custom_terms as $custom_term) {
				wp_reset_query();
				$args = array('post_type' => 'faq',
        'tax_query' => array(
            array(
                'taxonomy' => 'faq_type',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ),
        ),
     );

     $loop = new WP_Query($args);
     if($loop->have_posts()) {
        
        echo '<div class="faq_type_wrapper"><span class="faq_type">'.$custom_term->name.'</span></div>';

        while($loop->have_posts()) : $loop->the_post(); ?>
           
           
           <div class="question_wrapper">
	           
	           <span class="question"><?php the_title();?></span>
	           <span class="drop_arrow"></span><!-- drop_arrow -->
	           <div class="answer content"><?php the_content();?></div>
	           
           </div><!-- question_wrapper -->
           
        
        <?php endwhile;
     }
			
			} ?>
						
		</div><!-- faq_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>