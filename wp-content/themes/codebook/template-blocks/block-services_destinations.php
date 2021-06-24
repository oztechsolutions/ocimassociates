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

<div class="<?php echo $animation; ?> block block--services_destinations <?php the_sub_field('classes'); ?> <?php echo $customClass; ?>" style="background-color: <?php echo $background['colour']; ?>; background-image: url('<?php echo $background_url; ?>'); background-position: <?php echo $background['position']; ?>; background-repeat: <?php echo $background['repeat']; ?>; background-size: <?php echo $background['size']; ?>; margin: <?php echo $margin['desktop']; ?>; padding: <?php echo $padding['desktop']; ?>;" data-<?php the_sub_field('layout'); ?>="true">
	
	<?php if($layout == 'full-width'): ?>
		<div class="container">
	<?php endif; ?>

		<?php if ( have_rows( 'all_services_&_destinations' ) ) : ?>
			<?php while ( have_rows( 'all_services_&_destinations' ) ) : the_row(); ?>
			    <div class="titleSubtitle">
				<?php if(get_sub_field('main_title')):?><h2><?php the_sub_field( 'main_title' ); ?></h2><?php endif; ?>
				<?php if(get_sub_field('sub_title')):?><div class="subtitle"><p><?php the_sub_field( 'sub_title' ); ?></p></div><?php endif; ?>
				</div>
				
				
				<?php $value = get_sub_field( 'select_services_or_destinations' ); ?>
				<div class="row blockArchive">
				<?php
				$args = array('post_type' => $value);
				$the_query = new WP_Query( $args );
				if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<?php $featured_img_url_default = 'https://estudylink.com/wp-content/uploads/2021/04/Estudylink.png'; ?>
				<?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'medium_large'); ?>
				<div class="col-12 col-sm-6 col-md-4 col-lg-3 blockHolder">
				    <a href="<?php the_permalink(); ?>">
				        <div class="img" style="background: url(<?php if($featured_img_url) { echo $featured_img_url; } else { echo $featured_img_url_default; } ?>) no-repeat center/cover"></div>
				        <div class="title"><?php the_title(); ?></div>
				    </a>
				</div>
				
				<?php endwhile; endif; wp_reset_postdata(); ?>
				</div>
				
			<?php endwhile; ?>
		<?php endif; ?>
		
	<?php if($layout == 'full-width'): ?>
		</div>
	<?php endif; ?>

</div>

<?php if($layout = 'normal'): ?>
	</div>
<?php endif; ?>
