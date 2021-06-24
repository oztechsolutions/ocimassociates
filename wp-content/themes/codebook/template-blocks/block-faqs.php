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

<div class="<?php echo $animation; ?> block block--faq <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<div class="block__faq">
			<div class="faqBlock">
				<header class="primary text-center"><?php the_field( 'faq_main_title', 'option' ); ?></header>
				<header class="secondary text-center"><?php the_field( 'faq_secondary_title', 'option' ); ?></header>
				<div class="testimonialContent pt-4">
					<?php if ( have_rows( 'faq_questions_answers', 'option' ) ) : while ( have_rows( 'faq_questions_answers', 'option' ) ) : the_row(); ?>
						<div class="testimonialBlock">
							<div class="blockwrapper">
								<div class="question"><?php the_sub_field( 'question' ); ?></div>
								<div class="answer"><?php the_sub_field( 'answer' ); ?></div>
							</div>
						</div>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
