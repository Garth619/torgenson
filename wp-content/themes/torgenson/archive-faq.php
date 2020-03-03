<?php get_header(); ?>
	
	<div id="internal_main">
		
		<?php echo file_get_contents("wp-content/themes/torgenson/images/pheonix-test.svg"); ?>
	
	<div class="internal_container">
		
		<h1 class="internal_title">FAQs</h1><!-- internal_title -->
		
		<div class="faq_wrapper">
			
			<?php $custom_terms = get_terms('faq_type', array('slug' => array('general')));

				foreach($custom_terms as $custom_term) {
					
					$args = array('post_type' => 'faq');
					
					$loop = new WP_Query($args);
     
					if($loop->have_posts()) {
        
						echo '<div class="faq_type_wrapper"><span class="faq_type">'.$custom_term->name.'</span>';

						while($loop->have_posts()) : $loop->the_post(); ?>
           
						<div class="question_wrapper">
	           
	           <span class="drop_arrow"></span>
	           <span class="question"><?php the_title();?></span>
	           <div class="answer content"><?php the_content();?></div>
	           
           </div><!-- question_wrapper -->
           
        
        <?php endwhile; echo '</div>';
	        
	       }
			
			} ?>
			
			
			
			
			<?php $custom_terms_two = get_terms('faq_type', array('exclude' => array( 8 ))); // exclude general

				foreach($custom_terms_two as $custom_term_two) {
				wp_reset_query();
				$args_two = array(
				'post_type' => 'faq',
        'tax_query' => array(
            array(
                'taxonomy' => 'faq_type',
                'field' => 'slug',
                'terms' => $custom_term_two->slug,
            ),
        ),
     );

     $loop_two = new WP_Query($args_two);
     
     if($loop_two->have_posts()) {
        
        echo '<div class="faq_type_wrapper"><span class="faq_type">'.$custom_term_two->name.'</span>';

        while($loop_two->have_posts()) : $loop_two->the_post(); ?>
           
           
           <div class="question_wrapper">
	           
	           <span class="drop_arrow"></span>
	           <span class="question"><?php the_title();?></span>
	           <div class="answer content"><?php the_content();?></div>
	           
           </div><!-- question_wrapper -->
           
        
        <?php endwhile; echo '</div>';
     }
			
			} ?>
						
		</div><!-- faq_wrapper -->
		
	</div><!-- internal_container -->
	
</div><!-- internal_main -->

<?php get_footer(); ?>