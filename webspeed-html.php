<?php 
/*
Plugin Name: Webspeed HTML
Version: 1.0
Plugin URI: https://www.web.dk
Description: Custom HTML Plugin. Requirements: Advanced Custom Fields PRO
Author: Morten Andersen
Text Domain: webspeed-html-domain
Author URI: https://www.web.dk.dk
*/

// Files
if( function_exists('acf_add_local_field_group') ):
	require_once ('files/posttype.php');
	require_once ('files/acf.php');
	require_once ('files/shortcode.php');
endif;