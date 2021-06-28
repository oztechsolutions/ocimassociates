<?php if ( have_rows('content') ) : ?>

<?php $i=1; while ( have_rows('content') ) : the_row();
    //$block_field_key = get_sub_field('block_id');
?>

    <?php if ( get_row_layout() == 'text' ) : ?>
        <?php include locate_template( 'template-blocks/block-text.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'two_full_column_image_text' ) : ?>
        <?php include locate_template( 'template-blocks/block-two_full_column_image_text.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'brand-slider' ) : ?>
        <?php include locate_template( 'template-blocks/block-brand-slider.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'team-slider' ) : ?>
        <?php include locate_template( 'template-blocks/block-team-slider.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'faqs' ) : ?>
        <?php include locate_template( 'template-blocks/block-faqs.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'testimonials' ) : ?>
        <?php include locate_template( 'template-blocks/block-testimonials.php' ); ?>
    <?php endif; ?>

    <?php if ( get_row_layout() == 'two_column' ) : ?>
        <?php include locate_template( 'template-blocks/block-two_column.php' ); ?>
    <?php endif; ?>
    
    <?php if ( get_row_layout() == 'three_column_block' ) : ?>
        <?php include locate_template( 'template-blocks/block-three_column_block.php' ); ?>
    <?php endif; ?>
    
    <?php if ( get_row_layout() == 'services_destinations' ) : ?>
        <?php include locate_template( 'template-blocks/block-services_destinations.php' ); ?>
    <?php endif; ?>

<?php  $i++; endwhile; ?>

<?php endif; ?>
