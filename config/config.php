<?php
define("HOST",$_SERVER['HTTP_HOST']);

define("IP",$_SERVER['REMOTE_ADDR']);

define("BROWSER",$_SERVER['HTTP_USER_AGENT']);

define("URI",$_SERVER['REQUEST_URI']); 

$_SESSION['user_id'] = array();

$_SESSION['user_options'] = array();

define("DIR",dirname(__FILE__));

?>
