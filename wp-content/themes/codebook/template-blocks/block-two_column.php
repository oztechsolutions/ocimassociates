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

<div class="<?php echo $animation; ?> block block--two_column <?php the_sub_field('classes'); ?> <?php echo $layout; ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block__two_column <?php echo $customClass; ?>">
			<?php $numberOfColumn = get_sub_field( 'choose_number_of_block' ); ?>

			<?php 
				$left = '';
				$right = '';
				switch($numberOfColumn){
					case "2-10":
						$left = 2;
						$right = 10;
					break;
					case "3-9":
						$left = 3;
						$right = 9;
					break;
					case "4-8":
						$left = 4;
						$right = 8;
					break;
					case "5-7":
						$left = 5;
						$right = 7;
					break;
					case "6-6":
						$left = 6;
						$right = 6;
					break;
					case "7-5":
						$left = 7;
						$right = 5;
					break;
					case "8-4":
						$left = 8;
						$right = 4;
					break;
					case "9-3":
						$left = 9;
						$right = 3;
					break;
					default:
					$left = 10;
					$right = 2;
				}
			?>
			<div class="row">
				<div class="leftCol col-md-<?php echo $left; ?>">
					<?php the_sub_field( 'left_column_content' ); ?>
				</div>
				<div class="rightCol col-md-<?php echo $right; ?>">
					<?php the_sub_field( 'right_column_content' ); ?>
				</div>
			</div>
		</div>

		<?php if ( get_sub_field( 'add_custom_css' ) == 1 ) { ?>
			<style><?php echo esc_html( get_sub_field( 'custom_css_block' ) ); ?></style>
		<?php } ?>

		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
