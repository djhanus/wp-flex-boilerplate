<?php


/**
 * Add ACF Options page.
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => 'Theme Options',
		'menu_title'    => 'Theme Options',
		'menu_slug'     => 'theme-options',
		'capability'    => 'edit_posts',
		'redirect'      => false
));
}




/**
 * Add ACF Json save point files
 */
add_filter('acf/settings/save_json', 'my_acf_json_save_point');

function my_acf_json_save_point( $path ) {

    // update path
    $path = get_stylesheet_directory() . '/acf-json';

    // return
    return $path;

}


/**
 * Customize ACF CSS
 */
function my_acf_admin_head() {
    ?>
    <style type="text/css">

			.acf-flexible-content .layout .acf-fc-layout-handle {
			    background-color: #EEEEEB !important;
			}

    </style>
    <?php
}
add_action('acf/input/admin_head', 'my_acf_admin_head');


?>
