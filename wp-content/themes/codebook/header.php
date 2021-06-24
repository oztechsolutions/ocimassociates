<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( get_field( 'favicon', 'option' ) ) : ?> <link rel="shortcut icon" href="<?php the_field( 'favicon', 'option' ); ?>" /> <?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content', 'codebook' ); ?></a>
	<header id="masthead" class="site-header">
		<?php get_template_part( 'template-parts/navbar/navbar-default' ); ?>
	</header><!-- #masthead -->

	<?php get_template_part( 'template-parts/banner/banner' ); ?>

	<div id="content" class="site-content">