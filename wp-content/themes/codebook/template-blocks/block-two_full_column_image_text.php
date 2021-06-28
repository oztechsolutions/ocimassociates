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

<div class="<?php echo $animation; ?> block block--two_full_column_image_text <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block__two_full_column_image_text">

			<div class="fullWidth-twoCol">
				<div class="row <?php if ( have_rows( 'image_column' ) ) : while ( have_rows( 'image_column' ) ) : the_row(); if ( get_sub_field( 'move_image_block_to_right' ) == 1 ) { echo "imageRight"; } endwhile; endif; ?>">

					<?php if ( have_rows( 'image_column' ) ) : while ( have_rows( 'image_column' ) ) : the_row(); 
					$add_image_for_this_block = get_sub_field( 'image' ); ?>
					<?php if ( get_sub_field( 'replace_image_with_map_iframe' ) == 1 ) { ?>
						<div class="col-md-6 mapURL"><?php the_sub_field( 'map_iframe_url' ); ?></div>
					<?php } else { ?>
						<div class="col-md-6 imageSection" style="background-image: url(<?php echo $add_image_for_this_block['url']; ?>)">
						</div>
					<?php } ?>
					<?php endwhile; endif; ?>


					<div class="col-md-6 contentSection">
						<div class="contentWrapper">
							<?php if ( have_rows( 'text_column' ) ) : while ( have_rows( 'text_column' ) ) : the_row(); ?>
								<div class="contentBox"><?php the_sub_field( 'text_section' ); ?></div>
							<?php endwhile; endif; ?>
						</div>
					</div>

				</div>
			</div>

		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout == 'normal'): ?>
	</div>
<?php endif; ?>
