<?php
ob_start();

require_once "../config/config_db.php";
require_once "../config/config.php";
require_once "../config/class.php";   
require_once "router.php";
/*
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
*/
//print_r($_COOKIE);
//echo $_COOKIE['login'];
  
//setcookie("AU", 1, time() + 600, "/");


if(isset($_POST['smartsbmt'])) {
	
	if(!empty($_POST['smartuser']) && !empty($_POST['smartpsw'])) {
	   $getclear = array($_POST['smartuser'],$_POST['smartpsw']);
	   $autorisation_arr = $data->clear($getclear);
	    } else {
	   $report->error("ERROR : field empty");	
		}
	

	if(file_exists("../action/login_action.php")) {
		require_once "../action/login_action.php";
			if(is_array($autorisation_arr) && count($autorisation_arr) >0) {
			$auth->loginMirror($autorisation_arr);
			} else {
			$report->error("ERROR : transfer data");
			}
		} else {
		$report->error("ERROR : this action not found");	
		}	
}

switch($_COOKIE['AU']) {
	case"0":
      $page = $view->logintpl("login");
	break;
    
	case"1":
     $page = $view->logintpl("admin");
	 $page = $option->router($page); 
	 $action->param($_GET['action']); 
    break;
	
	default:
      $page = $view->logintpl("login");
	break;
}

 	

echo $page;


?>
