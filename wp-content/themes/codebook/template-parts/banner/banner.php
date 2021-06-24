<div class="banner-slider">
    <?php if ( have_rows( 'banner_slider' ) ) : ?>
        <?php while ( have_rows( 'banner_slider' ) ) : the_row(); ?>
            <?php $banner_background = get_sub_field( 'banner_background' ); ?>
            <div class="bannerHolder" style="background-image: url(<?php echo $banner_background['url']; ?>)">
                <div class="container">
                    <?php if ( have_rows( 'banner_content' ) ) : while ( have_rows( 'banner_content' ) ) : the_row(); ?>
                        <div class="bannerContent">
                            <h1><?php the_sub_field( 'primary_heading' ); ?></h1>
                            <div class="secondaryTxt"><?php the_sub_field( 'secondary_text' ); ?></div>
                            <?php if ( get_sub_field( 'add_cta_button' ) == 1 ) { ?>
                                <?php $cta_button = get_sub_field( 'cta_button' ); ?>
                                <?php if ( $cta_button ) { ?>
                                    <div class="cta-button"><a class="custom-button mt-4" href="<?php echo $cta_button['url']; ?>" target="<?php echo $cta_button['target']; ?>"><?php echo $cta_button['title']; ?></a></div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>