<?php
/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package codebook
 */
?>

	</div><!-- #content -->
	<footer id="colophon" class="site-footer bg-light">
		<div class="social-links text-center pt-5">
			<?php if ( have_rows( 'social_media', 'option' ) ) : while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
				<?php if(get_sub_field('facebook')): ?><a target="_blank" rel="nofollow" href="<?php the_sub_field( 'facebook' ); ?>" class="fb"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
				<?php if(get_sub_field('instagram')): ?><a target="_blank" rel="nofollow" href="<?php the_sub_field( 'instagram' ); ?>" class="ig"><i class="fab fa-instagram"></i></a><?php endif; ?>
				<?php if(get_sub_field('linkedin')): ?><a target="_blank" rel="nofollow" href="<?php the_sub_field( 'linkedin' ); ?>" class="li"><i class="fab fa-linkedin"></i></a><?php endif; ?>
				<?php if(get_sub_field('twitter')): ?><a target="_blank" rel="nofollow" href="<?php the_sub_field( 'twitter' ); ?>" class="tt"><i class="fab fa-twitter"></i></a><?php endif; ?>
				<?php if(get_sub_field('youtube')): ?><a target="_blank" rel="nofollow" href="<?php the_sub_field( 'youtube' ); ?>" class="yt"><i class="fab fa-youtube"></i></a><?php endif; ?>
			<?php endwhile; endif; ?>
		</div>
		<?php 
            $phone = get_field('phone_number', 'option');
            $res = preg_replace("/[^a-zA-Z0-9]/", "", $phone);
        ?>
        
        <div class="text-center pt-4"><a href="tel:<?php echo $res; ?>" class="phone custom-button"><i class="fa fa-phone mr-8"></i><?php the_field( 'phone_number', 'option' ); ?></a></div>
        
		<div class="container text-center site-info pb-4 pt-4">
			Site designed and developed by <a href="https://codebook.com.au" target="_blank" rel="nofollow">https://codebook.com.au</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php get_template_part( 'template-parts/sticky-footer/sticky-footer' ); ?>

<?php wp_footer(); ?>

</body>
</html>
