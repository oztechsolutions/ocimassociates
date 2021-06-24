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

<div class="<?php echo $animation; ?> block block--three_column_block <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>
        <div class="mainTitleBlock text-center"><?php the_sub_field( 'main_title_three_col' ); ?></div>
		<div class="block__three_column_block">
			<?php if ( have_rows( 'three_col_block' ) ) : ?>
				<?php while ( have_rows( 'three_col_block' ) ) : the_row(); ?>
				    <div class="blockWrapper">
    					<?php $image_block = get_sub_field( 'image_block' ); ?>
    					    <a class="imgHolder" href="#" style="background-image: url(<?php echo esc_url( $image_block['url'] ); ?>)">
    					    </a>
    					<header><?php the_sub_field( 'title_block' ); ?></header>
    					<div class="shortText"><?php the_sub_field( 'short_text' ); ?></div>
    					<div class="buttonLabel">
    					
    					<?php $button_link = get_sub_field( 'button_link' ); ?>
    					<?php if ( $button_link ) : ?>
    						<a href="<?php echo esc_url( $button_link['url'] ); ?>" target="<?php echo esc_attr( $button_link['target'] ); ?>"><?php the_sub_field( 'button_label' ); ?></a>
    					<?php endif; ?>
    					</div>
					</div>
				<?php endwhile; endif; ?>
		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
