<?php
/**
 * Add ACF Options page.
 */

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

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
