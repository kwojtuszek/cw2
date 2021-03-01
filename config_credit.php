<?php
define('_SERVER_NAME', 'localhost:80');
define('_SERVER_URL', 'http://'._SERVER_NAME);
define('_APP_ROOT', '/cw2');
define('_APP_URL', _SERVER_URL._APP_ROOT);
define("_ROOT_PATH", dirname(__FILE__));

// Wrzucal tą funkcje, ponieważ jest dla mnie wygodna

function out(&$param){
	if (isset($param)){
		echo $param;
	}
}
?>