<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<?php
				while ( have_posts() ) : the_post();?>
					<?php $uni_logo = get_field( 'uni_logo' ); ?>
                    <?php if ( $uni_logo ) : ?>
                    	<img src="<?php echo esc_url( $uni_logo['url'] ); ?>" alt="<?php echo esc_attr( $uni_logo['alt'] ); ?>" />
                    <?php endif; ?>
                    
                    <?php if ( have_rows( 'scholarship_content' ) ) : ?>
                    	<?php while ( have_rows( 'scholarship_content' ) ) : the_row(); ?>
                    		<?php the_sub_field( 'title' ); ?>
                    		<?php the_sub_field( 'content_block' ); ?>
                    	<?php endwhile; ?>
                    <?php else : ?>
                    	<?php // no rows found ?>
                    <?php endif; ?>
				<?php endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();