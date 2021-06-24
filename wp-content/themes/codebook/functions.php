<?php
define('THEME_DIR_PATH', get_template_directory());
define('THEME_DIR_URI', get_template_directory_uri());
require get_template_directory() . '/inc/default-setup.php';
require get_template_directory() . '/inc/enqueue.php';
require get_template_directory() . '/inc/acf-functions.php';
/********/
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';
require get_template_directory() . '/inc/customizer.php';
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
require get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

//datepicker
function wpse_enqueue_datepicker() {
    // Load the datepicker script (pre-registered in WordPress).
    wp_enqueue_script( 'jquery-ui-datepicker' );
    // You need styling for the datepicker. For simplicity I've linked to Google's hosted jQuery UI CSS.
    wp_register_style( 'jquery-ui', 'https://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css' );
    wp_enqueue_style( 'jquery-ui' );
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_datepicker' );

//enqueue admin style
function enqueue_admin_style() {
	if(is_admin()) {
		wp_enqueue_style( 'custom-admin-style', get_template_directory_uri() . '/lib/css/custom-admin-style.css?time=' . filemtime(get_stylesheet_directory() . "/lib/css/custom-admin-style.css") );
	}
}
add_action('init', 'enqueue_admin_style');

// wordpress login logo change
function login_css() {
	wp_enqueue_style( 'login_css', get_template_directory_uri() . '/lib/css/custom-admin-style.css?time=' . filemtime(get_stylesheet_directory() . "/lib/css/custom-admin-style.css") );
}
add_action('login_head', 'login_css');

/*** Remove Query String from Static Resources ***/
function remove_cssjs_ver( $src ) {
	if( strpos( $src, '?ver=' ) )
	$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );