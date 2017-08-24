<?php
/*
Plugin Name: InstaShow Lite
Description: Lite version of Instagram feed for WordPress. Create unique galleries of Instagram photos. User friendly, flexible and fully responsive. Amazing look for stunning images.
Plugin URI: https://elfsight.com/instagram-feed-instashow/wordpress/
Version: 1.4.0
Author: Elfsight
Author URI: https://elfsight.com/
*/

if (!defined('ABSPATH')) exit;

define('INSTASHOW_LITE_SLUG', 'instashow-lite');
define('INSTASHOW_LITE_VERSION', '1.4.0');
define('INSTASHOW_LITE_FILE', __FILE__);
define('INSTASHOW_LITE_PATH', plugin_dir_path(__FILE__));
define('INSTASHOW_LITE_URL', plugin_dir_url( __FILE__ ));
define('INSTASHOW_LITE_PLUGIN_SLUG', plugin_basename( __FILE__ ));
define('INSTASHOW_LITE_TEXTDOMAIN', 'instashow');
define('INSTASHOW_LITE_SUPPORT_LINK', 'https://wordpress.org/support/plugin/instashow-lite');
define('INSTASHOW_LITE_PRO_URL', 'https://elfsight.com/instagram-feed-instashow/wordpress/?utm_source=markets&utm_medium=wordpressorg&utm_content=adminpanel&utm_campaign=ISWPlite&utm_term=upgradetopro');

require_once(ABSPATH . implode(DIRECTORY_SEPARATOR, array('wp-admin', 'includes', 'plugin.php')));

if (!is_plugin_active('elfsight-instashow/elfsight-instashow.php')) {
	require_once(INSTASHOW_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'instashow-defaults.php')));
	require_once(INSTASHOW_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'instashow-admin.php')));
	require_once(INSTASHOW_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'instashow-shortcode.php')));
	require_once(INSTASHOW_LITE_PATH . implode(DIRECTORY_SEPARATOR, array('includes', 'instashow-lib.php')));
}

?>