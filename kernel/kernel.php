<?php
####################################
#........SIMPLE.WEBSITE.PAGE.......#
#..................................#
#.CodeBy.:.Mr.Config...............#
#.FB.....:.https://fb.me/mr.config.#
#..................................#
####################################
ini_set('error_reporting', E_ALL);
//ini_set('error_reporting', 0);

function NotFound($error)
{
	if($error == '404'){	
		header('HTTP/1.1 404 Not Found!.', TRUE, 404);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: ';
		exit(3);
		die;
	}
	else if($error == '503') {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3);
		die;
	}
	else {
		header('HTTP/1.1 503 Service Unavailable.', TRUE, 503);
		echo 'Your application folder path does not appear to be set correctly. Please open the following file and correct this: '.SELF;
		exit(3);
		die;
	}
}

function template($need)
{
    @require_once 'kernel/replace.php';
	$lala 	= array_chunk($GLOBALS['place'], 2);
	$clala 	= count($lala);
	$repl1	= array();
	$repl2 	= array();
	for ($i=0; $i < $clala; $i++) { 
		$repl1[] = $lala[$i][0];
		$repl2[] = $lala[$i][1];
	}
	$accbl = '<?php if(!defined("FlamoreID")) defined("FlamoreID") or die( header("HTTP/1.0 403 Forbidden") '.
			'); die("<!DOCTYPE HTML PUBLIC \"-//IETF//DTD HTML 2.0//EN\"><html><head><title>403 Forbidden</tit'.
			'le></head><body><h1>Forbidden</h1><p>You dont have permission to access / on this server.</p></'.
			'body></html>"); exit(); ?>';
	$main 	= str_replace( $repl1, $repl2, str_replace( $accbl, '<!-- DEV FLAMORE -->', file_get_contents(ASSETS.$need.'.core.php') ) );
	return $main;
}

function MenuNav()
{
	$directory = "kernel/hook/";
	$menus = array_diff(scandir($directory), array('..', '.','home.inc.php'));
	$menu = '<li class="nav-item"><a class="nav-link" href="/"> HOME </a></li>';
	foreach($menus as $menuz){
		$menuz = explode('.',$menuz)[0];
		$menu .= '<li class="nav-item"><a class="nav-link" href="/?page='.$menuz.'"> '.strtoupper($menuz).' </a></li>';
	}
	// var_export($menu);
	return $menu;
}

$laman = ( isset($_GET['page']) && !empty($_GET['page']) ) ? $_GET['page'] : '';
// var_export(MenuNav());
if ( file_exists("kernel/hook/". $laman .".inc.php") && is_file("kernel/hook/". $laman .".inc.php")===TRUE ) {
	echo template('header');
	include_once "kernel/hook/". $laman .".inc.php";
	echo template('footer');
}
else if ( !$laman ) {
	// var_export(MenuNav());
	echo template('header');
	include_once "kernel/hook/home.inc.php";
	echo template('footer');
}
else die( NotFound(404) );
