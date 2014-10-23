<?php 
session_start();
global $config;
define("_ENV",'local');

define("_DBHOST",'localhost');
define("_DBUSER",'root');
define("_DBPASS",'');
define("_DBNAME",'cart');

define ("_SITE",'http://local.cart.com');
define ("_DOCROOT",$_SERVER['DOCUMENT_ROOT']);
if (isset($_SESSION['site_username']) && $_SESSION['site_username'] != '') {
	define("_USERNAME",$_SESSION['site_username']);
} else {
	define("_USERNAME",null);
}

if (isset($_SESSION['site_admin']) && $_SESSION['site_admin'] != '') {
	define("_SITEADMIN",$_SESSION['site_admin']);
} else {
	define("_SITEADMIN",null);
}

?>