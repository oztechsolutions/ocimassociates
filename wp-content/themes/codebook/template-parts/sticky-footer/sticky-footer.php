
<?php if ( get_field( 'enable_sticky_footer', 'option' ) == 1 ) { ?>

<?php if ( have_rows( 'sticky_footer_content', 'option' ) ) : while ( have_rows( 'sticky_footer_content', 'option' ) ) : the_row(); ?>
    <?php 
        $stickyBackgroundColour = get_sub_field( 'sticky_footer_background_colour' );
        $primaryTitle = get_sub_field( 'primary_title' );
        $primaryTitleColour = get_sub_field( 'primary_title_colour' );
        $secondaryTitle = get_sub_field( 'secondary_title' );
        $secondaryTitleColour = get_sub_field( 'secondary_title_colour' );
    ?>
    <div class="stickyFooter" style="background: <?php echo $stickyBackgroundColour; ?> ">
        <div class="container">
            <div class="stickyContent">
                <div class="contentSection">
                    <span class="primary" style="color: <?php echo $primaryTitleColour; ?>"><?php echo $primaryTitle; ?></span>
                    <?php if($secondaryTitle): ?><span class="secondary" style="color: <?php echo $secondaryTitleColour; ?>"><?php echo $secondaryTitle; ?></span><?php endif; ?>
                </div>
                <?php if ( get_sub_field( 'add_linkbutton' ) == 1 ) {  ?>
                    <?php if ( have_rows( 'button__link' ) ) : while ( have_rows( 'button__link' ) ) : the_row(); ?>
                        <?php $button_link = get_sub_field( 'button_link' ); 
                            $btnBackground = get_sub_field( 'button_background_colour' );
                            $btnTextColour =  get_sub_field( 'button_text_colour' );
                        ?>
                        <div class="buttonSection">
                            <a style="background: <?php echo $btnBackground; ?>; color: <?php echo $btnTextColour; ?>" href="<?php echo $button_link['url']; ?>" target="<?php echo $button_link['target']; ?>" class="custom-btn"><?php echo $button_link['title']; ?></a>
                        </div>
                    <?php endwhile; endif; ?>
                <?php } ?>
            </div>
        </div>
    </div>
<?php endwhile; endif; ?>

<?php } ?>
