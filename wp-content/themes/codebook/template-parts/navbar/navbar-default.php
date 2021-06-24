<nav id="site-navigation" class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?php echo home_url() ?>">
            <?php if ( get_field( 'logo', 'option' ) ) : ?>
                <?php echo wp_get_attachment_image( get_field( 'logo', 'option' ), 'full' ); ?>
            <?php else : ?>
                <?php bloginfo('site'); ?>
            <?php endif; ?>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
            <span> </span>
            <span> </span>
            <span> </span>
        </button>
        <?php
            wp_nav_menu( array(
            'theme_location'  => 'menu-1',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse justify-content-end',
            'container_id'    => 'navBar',
            'menu_class'      => 'navbar-nav',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
        ?>
        <?php 
            $phone = get_field('phone_number', 'option');
            $res = preg_replace("/[^a-zA-Z0-9]/", "", $phone);
        ?>
        <?php /*
        <a href="tel:<?php echo $res; ?>" class="phone custom-button"><i class="fa fa-phone mr-8"></i><?php the_field( 'phone_number', 'option' ); ?></a>
        */?>
    </div>
</nav><!-- #site-navigation -->
