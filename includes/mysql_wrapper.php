<?php

/*MySQL wrapper functions*/
function db_connect(){
	require_once('config.php');

	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if(!$link){
		die('Could not connect: ' . mysql_error());
	}
}
