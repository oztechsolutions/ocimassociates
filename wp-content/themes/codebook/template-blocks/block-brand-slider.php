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

<div class="<?php echo $animation; ?> block block--brandslider <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>


	<?php $ignoreGlobalSettings = get_sub_field('ignore_global_brand_slider_and_use_separate_slider'); ?>
	<?php if($ignoreGlobalSettings == 1){ ?>
		<div class="ignoredGlobalSettingsContent">
			<?php if( get_sub_field('brand__logo_slider_heading') ) : ?>
				<div class="sliderHeadingText text-center"><?php echo get_sub_field('brand__logo_slider_heading'); ?></div>
			<?php endif; ?>

			<?php if ( have_rows( 'brand_logo_slider' ) ) : ?>
				<div class="brandSlider">
					<?php while ( have_rows( 'brand_logo_slider' ) ) : the_row(); ?>
						<div class="brandHolder">
							<?php $brand_logo = get_sub_field( 'logo__brand_image' ); ?>
							<?php $brand_link = get_sub_field( 'logo__brand_link_url' ); ?>
			<a href="<?php if( $brand_link) { echo $brand_link['url']; } else { echo 'javascript:void(0)'; } ?>" <?php if( !$brand_link) { ?>class="noLink" <?php } ?>>
								<img src="<?php echo $brand_logo['url']; ?>" alt="<?php echo $brand_logo['alt']; ?>" />
							</a>
						</div>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>

		</div>
	<?php } else { ?>


		<?php if( get_field('brand_slider_heading_text', 'option') ) : ?>
			<div class="sliderHeadingText text-center"><?php echo get_field('brand_slider_heading_text', 'option'); ?></div>
		<?php endif; ?>

		<?php if ( have_rows( 'brand_slider', 'option' ) ) : ?>
			<div class="brandSlider">
				<?php while ( have_rows( 'brand_slider', 'option' ) ) : the_row(); ?>
					<div class="brandHolder">
						<?php $brand_logo = get_sub_field( 'brand_logo' ); ?>
						<?php $brand_link = get_sub_field( 'brand_link' ); ?>
		<a href="<?php if( $brand_link) { echo $brand_link['url']; } else { echo 'javascript:void(0)'; } ?>" <?php if( !$brand_link) { ?>class="noLink" <?php } ?>>
							<img src="<?php echo $brand_logo['url']; ?>" alt="<?php echo $brand_logo['alt']; ?>" />
						</a>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

	<?php } ?>


		
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout == 'normal'): ?>
	</div>
<?php endif; ?>
