<?php

// THIS IS MY CONTROLLER FILE

ob_start(); // Typically this is done in a header file, but we're doing it here for simplicity.  This is a good habit to get into.  It´s mostly done automatically by the framework. You can find the amount of output buffering in the phpinfo() function. Normally it's 4096 bytes. 

define('PRIVATE_PATH', dirname(__FILE__));
define('PROJECT_PATH', dirname(PRIVATE_PATH));
define('PUBLIC_PATH', PROJECT_PATH . '/public');
define('SHARED_PATH', PRIVATE_PATH . '/shared');

$public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
$doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
define("WWW_ROOT", $doc_root);

require_once('validation_functions.php');
require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');

$db = db_connect();
$errors = [];
