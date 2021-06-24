<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package codebook
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', 'page' ); ?>
			
	
        
        
		<?php endwhile; // End of the loop.
		?>
		
		<div class="container">
		
    		<?php $args = array('post_type' => 'scholarship');
    		$the_query = new WP_Query( $args );
            // The Loop
            if ( $the_query->have_posts() ) {
            	while ( $the_query->have_posts() ) {
                  $the_query->the_post();
            	  // Do Stuff
            	  ?>
            	  <div class="scholarshipHolder">
    	            <?php $uni_logo = get_field( 'uni_logo' ); ?>
        		    <div class="uniLogo">
                        <figure><img src="<?php echo esc_url( $uni_logo['url'] ); ?>" alt="<?php echo esc_attr( $uni_logo['alt'] ); ?>" />
                        </figure>
                    </div>
                    <div class="uniContent">          
                        <?php if ( have_rows( 'scholarship_content' ) ) : ?>
                        	<?php while ( have_rows( 'scholarship_content' ) ) : the_row(); ?>
								<div class="contentBox">
                        			<div class="headingtitle">
										<?php the_sub_field( 'title' ); ?>
									</div>	
                        			<?php the_sub_field( 'content_block' ); ?>
								</div>	
                        	<?php endwhile; ?>
                        <?php endif; ?>
                    </div>  
                  </div>
            	  <?php
            	} // end while
            } // endif
            
            // Reset Post Data
            wp_reset_postdata(); ?>
        </div>
		

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();