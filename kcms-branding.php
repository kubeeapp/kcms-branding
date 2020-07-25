<?php
/*
Plugin Name: KCMS Branding
Plugin URI: https://github.com/kubeeapp/kcms-branding/
Description: Branding for KCMS sites.
Version: 1.0
Author: Romeo Covaci
Author URI:
License: MIT
*/

namespace Kcms\Branding;

/**
 * Set up autoloader
 */
require __DIR__ . '/vendor/autoload.php';

// Define constants
define('KCMS_BRANDING_PLUGIN_DIR', plugin_dir_path(__FILE__));
define('KCMS_BRANDING_PLUGIN_URL', plugin_dir_url(__FILE__));

// Branding
$kcms_branding = new Init();
