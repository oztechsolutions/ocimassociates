<?php /** ACF option pages*/

function codebook_blank_theme_init() {
	global $codebook_blank_theme_acf_theme_settings;
	/*ACF Options page*/
	if ( function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page') ) {
		$codebook_blank_theme_acf_theme_settings = acf_add_options_page(array(
	        'menu_title' => 'Theme Settings',
	        'menu_slug' => 'theme-settings',
	        'redirect' => 'theme-settings-design'
        ));
        
        acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Settings - Business',
			'menu_title'	=> 'Business',
			'parent_slug'	=> $codebook_blank_theme_acf_theme_settings['menu_slug'],
		));

	    acf_add_options_sub_page(array(
			'page_title' 	=> 'Theme Settings - Design',
			'menu_title'	=> 'Design',
			'parent_slug'	=> $codebook_blank_theme_acf_theme_settings['menu_slug'],
		));
	}
}
add_action( 'init', 'codebook_blank_theme_init', 10 );

/*ACF Google Map API key */
function codebook_blank_theme_acf_init() {
    $api = get_field( 'google_maps_api', 'option' );
	acf_update_setting( 'google_api_key', $api );
}
add_action('acf/init', 'codebook_blank_theme_acf_init');