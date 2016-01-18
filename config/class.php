<?php

/*
*=======================класс запроса к базе
*/
class superquery {
	public $get = "";
	
	function db($get) {
		$this->get = $get;
		$sync = mysql_query($this->get)or die(mysql_error());
		
		return $sync;
		}
	}
$superquery = new superquery();

/*
*======================шаблонизатор
*/
class templ {
	
	public $file = "";
	
	function shell($file) {
	
	    $this->file = $file;
	
		 if(file_exists("view/".$this->file.".tpl")) {
			
			$html = file_get_contents("view/".$this->file.".tpl");
		
		 } else {
			 
			 $html = "ошибка! такой страницы не существует";
			 
			 }

	 
	 return $html;
		   
		}
	}
$shell = new templ();


/*
*========================загрузка шаблонов админ секции
*/
class loginshell {
	
	public function logintpl($tpl) {
	    if(file_exists("../admin/".$tpl.".tpl")){
		$page = file_get_contents("../admin/".$tpl.".tpl");
		
	    } else {
		$report = new report_error();
		$report->error("ERROR : not template");
		}		
		return $page;
		}
	}
$view = new loginshell();


/*
*===========================вывод ошибок на страницу
*/
class report_error {
	
	function error($error) {
       echo "
	   <script type='text/javascript'>
	     alert('".$error."');
	   </script>
	   ";
		}
	}
$report = new report_error();

/*
*============================проверка массива на сторонний код
*/
class matchtags {
	
	function clear($arr) {
		$ckl = count($arr);
		$converse = array();
		
		for($i=0; $i < $ckl; $i++) {
			array_push($converse,htmlentities(strip_tags(htmlspecialchars(trim($arr[$i])))));
			}
	return $converse;
		} 
	 
	}
$data = new matchtags();


/*
*============================проверка переменной на сторонний код
*/
class dataclear {
	
	function clear($data) {
		
		$converse = htmlentities(strip_tags(htmlspecialchars(trim($data))));
		
	return $converse;
		} 
	 
	}
$pdata = new dataclear();


/*
*========================клас редиректа для админсекции
*/
class refresh {
	
	function redirect($page) {
		$link = header("Location: http://".$_SERVER['HTTP_HOST']."/admin/?option=".$page);
		return $link;
		}
	}

$refresh = new refresh();


/*
*======================класс вывода окна подтверждения
*/
class confirm {
	
	function alert($cat,$delcat,$data) {
		echo  "
 
               <div class='shadow'></div>
               <div class='modalwindow'>
			      <center><h3>$data</h3></center>
				  <center>
					
				  </center>

			   </div>
			   ";
		}
		
	}
$mess = new confirm();









?>
