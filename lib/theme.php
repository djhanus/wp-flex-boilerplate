<?php
add_action('after_setup_theme', 'wp_setup');
function wp_setup() {
  // Prevent File Modifications
  define('DISALLOW_FILE_EDIT', true);

  // Register navigation menus
  register_nav_menu('primary-menu', 'Primary Menu');

}

// Don't update our custom theme
add_filter('http_request_args', 'wp_dont_update_theme', 5, 2);
function wp_dont_update_theme($r, $url) {
  if (strpos($url, 'http://api.wordpress.org/themes/update-check') !== 0) return $r;
  $themes = unserialize($r['body']['themes']);
  unset($themes[get_option('template')]);
  unset($themes[get_option('stylesheet')]);
  $r['body']['themes'] = serialize($themes);
  return $r;
}

// Enqueue scripts
add_action('wp_enqueue_scripts', 'flex_scripts');
function flex_scripts() {
  if (!is_admin()) {
    wp_register_style('flex_styles', get_stylesheet_directory_uri() . '/style.css', null, filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('flex_styles');
  }
}

// Changes the default WP login page logo
add_action('login_enqueue_scripts', 'hm_login_logo');
function hm_login_logo() {
?>
  <style type="text/css">
    #login h1 a, .login h1 a {
      background-image: url('<?=IMAGES?>/svg/logo.svg');
      width: 150px;
      height: 150px;
      background-size: 150px 150px;
      background-repeat: no-repeat;
      padding-bottom: 25px;
    }
  </style>
<?php
}
?>
