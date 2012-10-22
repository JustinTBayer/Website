<?php
//connect to DB 
require_once('includes/mysql_wrapper.php');
db_connect();
//set default to the current theme

//for now, we will set $default ourselves
$default = 'default';
define('THEME',$default);
define('THEME_DIRECTORY','content/css/themes/');

//retrieve default landing page
//for now, we will set $index ourselves
$index = '/index.php';
require_once(THEME_DIRECTORY.THEME.$index);
