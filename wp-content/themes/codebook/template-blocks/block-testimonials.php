<?php

	$background = get_sub_field('background');
    $animation = get_sub_field('animation');
    $animation = $animation ? " wow {$animation} " : '';
	$margin = get_sub_field('margin');
	$padding = get_sub_field('padding');
	$customClass = get_sub_field('custom_class');
	$layout = get_sub_field('layout');

	$background_url = '';
	if ( $background['image'] )
		$background_url = wp_get_attachment_image_url( $background['image'], 'full' );

?>

<?php if($layout == 'normal'): ?>
<div class="container">
<?php endif; ?>

<div class="<?php echo $animation; ?> block block--testimonials <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block__testimonials">
			<?php $maintitle = get_field('testimonial_main_title', 'option');
			$secondaryTitle = get_field('testimonial_secondary_title', 'option'); ?>
			<?php if($maintitle): ?><header class="primary text-center"><?php the_field( 'testimonial_main_title', 'option' ); ?></header><?php endif; ?>
			<?php if($secondaryTitle): ?><header class="secondary text-center"><?php the_field( 'testimonial_secondary_title', 'option' ); ?></header><?php endif; ?>

			<div class="testimonialSlider">
				<?php if ( have_rows( 'testimonials', 'option' ) ) : while ( have_rows( 'testimonials', 'option' ) ) : the_row(); ?>
					<div class="testimonialHolder">
						<div class="testimonialContent"><?php the_sub_field( 'testimonial_content' ); ?></div>
						<?php if(get_sub_field('number_of_stars')):
							$no_of_stars = get_sub_field('number_of_stars');
						?>
							<div class="ratings pt-3 pb-3">
								<?php if($no_of_stars == "one"): ?>
									<i class="fas fa-star"></i>
								<?php elseif($no_of_stars == "two"): ?>
									<i class="fas fa-star"></i> <i class="fas fa-star"></i>
								<?php elseif($no_of_stars == "three"): ?>
									<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
								<?php elseif($no_of_stars == "four"): ?>
									<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
								<?php else: ?>
									<i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i>
								<?php endif; ?>
							</div>
						<?php endif; ?>
						<div class="testimonyName"><?php the_sub_field( 'testimony_name' ); ?></div>
					</div>    
				<?php endwhile; endif; ?>
			</div> <!-- testimonial slider -->

		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
