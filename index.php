<?php
session_start();
ob_start();

require_once "config/config.php";
require_once "config/config_db.php";
require_once "config/class.php";

//print_r($_SESSION['products']);
//unset($_SESSION['welcome']);
  
  /*if(!$_SESSION['welcome']) {
	 $_SERVER['REMOTE_ADDR'];
	 header("Location: http://".$_SERVER['HTTP_HOST']."/welcome.php"); 
	  }*/
 ?>
 <script src="view/js/jquery-1.11.2.js"></script>
 <?php

  if(isset($_GET['clearcart'])) {
	 unset($_SESSION['item_count'],$_SESSION['fullprice'],$_SESSION['products']);
	 header("Location: http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']); 
	  }
  if(!$_SESSION['item_count'] || $_SESSION['item_count']<0) {
	  $_SESSION['item_count'] = 0;
	  }
/*----передаем имя категории получаем массив---*/
  if(!$_GET['lang']) {
	header("Location: http://".$_SERVER['HTTP_HOST']."/en".$_SERVER['REQUEST_URI']);
	}
  
 
	
  if(isset($_GET['category'])) {
	
	
           $get_category = $pdata->clear($_GET['category']);	

			include "action/category_action.php";
			
			$category = getcat_action($get_category);
			$html = file_get_contents("view/main.tpl");
            $html = str_replace("{droot}",$_SERVER['DOCUMENT_ROOT'],$html);
            $html = str_replace("{count_products}",$_SESSION['item_count'],$html);
			
			
			
  switch($category['parrent_id']) {// если кат маг
	/*=========================================================================================================*/ 
	/*=========================================================================================================*/ 
	 case"1":
	 /*-----если вошел в полный товар------------*/
		if(isset($_GET['post'])) {
            $html = str_replace("{content}",$shell->shell("f".$category['template']),$html);
            include "action/content_action.php";
			$id = $pdata->clear($_GET['post']);
			
			function all_img_fitem($arr_img) {
				$img = explode(",",$arr_img);
				$count_img = count($img);
				
				for($s=0;$s<$count_img;$s++){
					$img_bl .= "<a class='example-image-link itemsf mini_items_img' data-lightbox='example-1' href='/uploads/shop/".$img[$s]."'><img src='/uploads/shop/".$img[$s]."'/></a>";
					}
					
			return $img_bl;
				}
				
			$post = fullitem_action($id); 
			  
			$html = str_replace("{itemID}",$post['id'],$html);
			$arr_img = explode(",",$post['images']);  
			$html = str_replace("{first_img_fitem}","<img src='/uploads/shop/".$arr_img[0]."'/>",$html);
			$html = str_replace("{all_img_fitem}",all_img_fitem($post['images']),$html);
            $html = str_replace("{title}",$post['title'],$html);
			$html = str_replace("{fitem_title}",$post['title'],$html);
			$html = str_replace("{fitem_code}",$post['code'],$html);
            $html = str_replace("{fitem_text}",$post['text'],$html);
			$html = str_replace("{fitem_price}",$post['price'],$html);
			$html = str_replace("{fitem_isset}",$post['isset'],$html);
			$html = str_replace("{cat_menu}",cat_menu(),$html);
			$html = str_replace("{dir}","view",$html);  
			$html = str_replace("{pagination}","",$html);
/*-----вывод всего товара что в категории------------*/		
		} else { 
			$html = str_replace("{title}",$category['title'],$html);
			 
		    include "action/content_action.php";

		    //$html = str_replace("{page_title}","<a href='".HOST.URI."&post=".$post['id']."'>".$post['title']."<a/>",$html);
            $html = str_replace("{content}",shortitem_action($category['template'],$category['id']),$html);
            $html = str_replace("{dir}","view",$html);
			$html = str_replace("{cat_menu}",cat_menu(),$html);
            $html = str_replace("{pagination}","",$html);
		}  			

    //----->end if parrent_id > 0
	break;
	/*=========================================================================================================*/ 
	/*=========================================================================================================*/ 
	case"0":
	/*-----если вошел в полный пост------------*/
		if(isset($_GET['post'])) {
            $html = str_replace("{content}",$shell->shell($category['template']),$html);
            include "action/content_action.php";
			$id = $pdata->clear($_GET['post']);
			
			$post = fullpost_action($id);
			
			$date = explode(" ",$post['data_write']);
		    $html = str_replace("{date_publication}",$date[0],$html);
			
			$html = str_replace("{title}",$post['title'],$html);
			$html = str_replace("{page_title}",$post['title'],$html);
            $html = str_replace("{page_content}",$post['full_text'],$html);
			$html = str_replace("{dir}","view",$html);
			$html = str_replace("{cat_menu}",cat_menu(),$html);
			$html = str_replace("{pagination}","",$html);
/*-----вывод всего что в категории------------*/		
		} else { 
			$html = str_replace("{title}",$category['title'],$html);
			 
		    include "action/content_action.php";

		    //$html = str_replace("{page_title}","<a href='".HOST.URI."&post=".$post['id']."'>".$post['title']."<a/>",$html);
            $html = str_replace("{content}",shortpost_action($category['template'],$category['id']),$html);
            $html = str_replace("{dir}","view",$html);
			$html = str_replace("{cat_menu}",cat_menu(),$html); 
            $html = str_replace("{pagination}",pagination($_GET['category']),$html);
		} 
	

	break;
	
	case"2":
    include "action/content_action.php";
    $html = str_replace("{content}",$shell->shell($category['template']),$html);
	$html = str_replace("{title}",$category['title'],$html);
	$html = str_replace("{dir}","view",$html);  
	$html = str_replace("{count_products}",$_SESSION['item_count'],$html);
	$html = str_replace("{cat_menu}",cat_menu(),$html);
	
	if(isset($_GET['unwrite'])) {
		$unwr = $_GET['unwrite'];
		
		$unwr_count = count($_SESSION['products']);
				
		$_SESSION['item_count'] = $_SESSION['item_count']-$_SESSION['products'][$unwr]['count'];
		$_SESSION['fullprice'] = $_SESSION['fullprice']-$_SESSION['products'][$unwr]['price'];
        unset($_SESSION['products'][$unwr]);
		header("Location: http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/cart");
		}
	 
	include_once "showcart.php"; 
		
	function item_name() {
		$itemnames = array();
		if($_SESSION['products']){
		foreach($_SESSION['products'] as $products) {
			array_push($itemnames,$products['title']);
			}
		$itemnames = implode(",",$itemnames);
		return $itemnames;
		}
	}	 
    $html = str_replace("{item_number}","WH-".date("Ymd-Hmi"),$html);
	$html = str_replace("{item_name}",item_name(),$html);	
	$html = str_replace("{product_list}",products_list($_GET['lang']),$html);
	if($_SESSION['fullprice']) {    
    $html = str_replace("{full_price}",$_SESSION['fullprice'],$html);
	} else {
	$html = str_replace("{full_price}",0,$html);
	}
	break;
  }
/*-----вывод главной страницы------------*/
} else {    
            require_once "action/content_action.php";
	        $html = file_get_contents("view/main.tpl");
			
			if(isset($_GET['post_search'])) {
			 $html = str_replace("{content}",post_search(),$html);
			 }
	  
		    $html = str_replace("{content}",file_get_contents("view/homepage.tpl"),$html);
		   	$html = str_replace("{page_title}","",$html);
            $html = str_replace("{page_content}","",$html);
			$html = str_replace("{title}","ESKIVO",$html);  
			$html = str_replace("{dir}","view",$html);
			//$html = str_replace("{count_products}",count($_SESSION['count_products']),$html);
			$html = str_replace("{count_products}",$_SESSION['item_count'],$html);   
			$html = str_replace("{home_items}",home_items(),$html);
			$html = str_replace("{cat_menu}",cat_menu(),$html);   
			$html = str_replace("{last_blog}",last_blog(),$html);  
			$html = str_replace("{last_news}",last_news(),$html);
			$html = str_replace("{pagination}","",$html); 
			$html = str_replace("{language}",language_list(),$html);
			
	}
 if($_GET['lang']) {
 $uri = str_replace("/".$_GET['lang']."/","",$_SERVER['REQUEST_URI']);
 $html = str_replace("{uri}",$uri,$html);
 }
 
 
 
 function popup_cart() {
	 if($_SESSION['products']) {
	 foreach($_SESSION['products'] as $prvalue) {	
	 	
		$img = explode(",",$prvalue['images']);
		$list .=  "<tr>
		<td><img width='50' src='/uploads/shop/$img[0]'/></td>
		<td>$prvalue[title]</td>
		<td><span class='badge'>$prvalue[count]</span>&nbsp;items</td>
		<td>$prvalue[price]</td>
		</tr>";
	   }
	 } else {
	    $list = "<tr><td>No items</td></tr>";
		 }
 return $list;	
  
}


include "language.php";

	 
	 
 function generate() {
	 $rand = mt_rand(00000000, 99999999);
	 return $rand;
	 }
 $html = str_replace("{generate}",generate(),$html);  
 
 $html = str_replace("{vendors_link}",vendors_link(),$html);
 
 $html = str_replace("{types_link}",types_link(),$html);
 
 $html = str_replace("{clear_cart}","http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/?clearcart=true",$html);           

 $html = str_replace("{host}","http://".$_SERVER['HTTP_HOST'],$html);

 $html = str_replace("{lang}",$_GET['lang'],$html);  
 
 $html = str_replace("{popup_cart}",popup_cart(),$html);    
 
 
 
	 

 
 $html = str_replace("{full_price}",$_SESSION['fullprice'],$html);
 
 if($_SESSION['fullprice']){
 $html = str_replace("{popup_total}","<span style='margin-left:16px;' class='pull-left'>total price</span> <element style='margin-right:16px;' class='pull-right'>".$_SESSION['fullprice']." CHF</element><div class='clr'></div>",$html);
 } else {
 $html = str_replace("{popup_total}","totlal price <span class='badge ptotal'>0</span> CHF",$html);	 
	 }

echo $html;




?>
