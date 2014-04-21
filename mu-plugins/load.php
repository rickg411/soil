<?php
/*
Plugin Name:  Must Use Plugins Loader
Plugin URI:   https://github.com/rickg411/soil
Description:  Options Framework, CMB, CF Post Formats, and site-specific functionality (custom post types, taxonomies, meta boxes, shortcodes)
Version:      1.0
Original Author:       Ben Word
Author URI:   http://benword.com/
*/

/* Most Commonly Used */

// require WPMU_PLUGIN_DIR . '/options-framework-plugin/options-framework.php';
// require WPMU_PLUGIN_DIR . '/wp-post-formats/cf-post-formats.php';
// require WPMU_PLUGIN_DIR . '/advanced-custom-fields/acf.php';
// require WPMU_PLUGIN_DIR . '/anti-spam/anti-spam.php';
// require WPMU_PLUGIN_DIR . '/wordpress-seo/wp-seo.php';
// require WPMU_PLUGIN_DIR . '/wordfence/wordfence.php';
// require WPMU_PLUGIN_DIR . '/limit-login-attempts/limit-login-attempts.php';
// require WPMU_PLUGIN_DIR . '/updraftplus/updraftplus.php';
// require WPMU_PLUGIN_DIR . '/nginx-helper/nginx-helper.php';
// require WPMU_PLUGIN_DIR . '/varnish-http-purge/varnish-http-purge.php';


// Site specific custom post types, taxonomies, meta boxes and shortcodes
require WPMU_PLUGIN_DIR . '/base/base.php';

// Load CMB
function load_cmb() {
  if (!is_admin()) {
    return;
  }

  require WPMU_PLUGIN_DIR . '/cmb/init.php';
}
add_action('init', 'load_cmb');
