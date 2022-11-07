<?php
####################################
#........SIMPLE.WEBSITE.PAGE.......#
#..................................#
#.CodeBy.:.Mr.Config...............#
#.FB.....:.https://fb.me/mr.config.#
#..................................#
####################################
//error_reporting(0);
if(!defined('FlamoreID')) define('FlamoreID', 1 );
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);
if(!defined('BASE')) define('BASE', str_replace(DS, '/',  __DIR__));
if(!defined('HTTP')) define('HTTP', @( $_SERVER["HTTPS"] != 'on') ? 'http://' : 'https://');
if(!defined('SITE')) define('SITE', $_SERVER["SERVER_NAME"]);
if(!defined('ROOT')) define('ROOT', str_replace(DS, '/', $_SERVER['DOCUMENT_ROOT']) );
if(!defined('GATE')) define('GATE', HTTP . SITE . str_replace(DS,'/',str_replace(realpath(ROOT), '', realpath(BASE))).'/');
if(!defined('KERNEL')) define('KERNEL', ROOT.DS.'kernel'.DS.'kernel.php');
if(!defined('ASSETS')) define('ASSETS', ROOT.DS.'assets'.DS);

if (file_exists(KERNEL) && is_file(KERNEL)===TRUE && file_exists('config.json') && is_file('config.json')===TRUE) {
	$GLOBALS['config'] = json_decode(file_get_contents('config.json'),true);
	require_once KERNEL;
}
else {
	header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
	echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
	exit(3); // EXIT_CONFIG
}