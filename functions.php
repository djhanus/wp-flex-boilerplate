<?php
define('THEME_URL', get_template_directory_uri());
define('THEME_PATH', get_template_directory());
define('IMAGES', THEME_URL . '/img');


function enqueue_parent_styles() {
  wp_enqueue_script('jquery-script', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
  wp_enqueue_script('main-js', get_stylesheet_directory_uri() .'/js/src/main.js', false, null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_parent_styles');

require_once(THEME_PATH . '/lib/acf.php');
// require_once(THEME_PATH . '/lib/cpt.php');
require_once(THEME_PATH . '/lib/comments.php');
require_once(THEME_PATH . '/lib/theme.php');


// A wrapper for error_log() that will run arrays and objects through print_r()
// and also allows for an unlimited number of parameters
function write_log(...$log) {
  foreach ($log as $key => $val) {
    if (is_array($val) || is_object($val)) {
      $log[$key] = print_r($val, true);
    }
  }
  error_log(implode(' ', $log));
}

// Remove WYSIWYG Editor from Page post types
add_action( 'init', function() {
    remove_post_type_support( 'page', 'editor' );
}, 99);
