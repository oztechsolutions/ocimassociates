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



		<?php if( get_field('teams_main_title', 'option') ) : ?>
			<div class="sliderHeadingText text-center"><?php echo get_field('teams_main_title', 'option'); ?></div>
		<?php endif; ?>

		<?php if ( have_rows( 'team_slider', 'option' ) ) : ?>
			<div class="brandSlider">
				<?php while ( have_rows( 'team_slider', 'option' ) ) : the_row(); ?>
					<div class="brandHolder">
						<?php $brand_logo = get_sub_field( 'personal_photo' ) ;
						if(isset($brand_logo['url'])):?>
							<img src="<?php echo $brand_logo['url']; ?>" alt="<?php echo $brand_logo['alt']; ?>" />
						<?php endif;?>
						<div class="team_slider_name"><?php echo get_sub_field( 'full_name' ); ?></div>
						<div class="team_slider_company"><?php echo get_sub_field( 'company_position' ); ?></div>
						<div class="team_slider_desc"><?php echo get_sub_field( 'short_description' ); ?></div>
					</div>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>

		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout == 'normal'): ?>
	</div>
<?php endif; ?>

	