<?php
class action {
			
        function param($data) {
	    $pdata = new dataclear();
	    $report = new report_error();
		          
				  if(isset($data) && !empty($data)) {
				  $data = $pdata->clear($data);
                   
				  switch($data) {
					  case"logout":
					      setcookie("AU", 0, time() + 8000, "/");
						  setcookie("AUTIME", time(), time() + 8000, "/");
						  unset($_SESSION['user_id']);
						  unset($_SESSION['options']);
						  $report->error("сессия закончена");
						  //header("Location: http://".$_SERVER['HTTP_HOST']."/admin");
						  
					  break;
					  } 
				   
 				  }	
		}
				
} 
$action = new action();


	
class pagerouter {

         function router($replace) {	
		 
		 $pdata = new dataclear();
		 $report = new report_error();
         $data = new matchtags();
		 $mess = new confirm();
         
		 if(isset($_GET['option']) && !empty($_GET['option']))  {
		 
			 $option = $pdata->clear($_GET['option']);//чистим от сторонего кода

					 if(file_exists($option.".tpl")) {
						  $adminpages = file_get_contents($option.".tpl");//подкл шабл запраш. страницы
						   
						  require_once "../action/login_action.php";//подкл екшены
						  
						  if(isset($_GET['lang'])) {
							  $lang = $_GET['lang'];
							  } else {
							  $lang = "ru";
								  }

						  $adminpages = str_replace("{category_list}",$admin->catlist(),$adminpages); 
						  $adminpages = str_replace("{parrent_cat}",$admin->selectlistcat(),$adminpages);
						  $adminpages = str_replace("{publication_list}",$admin->publicationlist(),$adminpages);
						  $adminpages = str_replace("{shop_pagination}",$admin->shoppagination(),$adminpages); 
						  $adminpages = str_replace("{publication_pagination}",$admin->postpagination(),$adminpages);
						  
						  $adminpages = str_replace("{language_list}",$admin->language_list(),$adminpages);
						  /*edit cat*/
						  $adminpages = str_replace("{catedit_keyword}",$admin->catedit_keyword($pdata->clear($_GET['id'])),$adminpages);  
						  $adminpages = str_replace("{catedit_description}",$admin->catedit_description($pdata->clear($_GET['id'])),$adminpages);  
						  $adminpages = str_replace("{catedit_tpl}",$admin->catedit_tpl($pdata->clear($_GET['id'])),$adminpages);     
						  $adminpages = str_replace("{catedit_link}",$admin->catedit_link($pdata->clear($_GET['id'])),$adminpages);  
						  $adminpages = str_replace("{catedit_title}",$admin->catedit_title($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{catedit_parrentcat}",$admin->catedit_parrentcat($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{catedit_lang}",$admin->catedit_lang($pdata->clear($_GET['id'])),$adminpages);
						  /*edit post*/
						  $adminpages = str_replace("{editpost_keyw}",$admin->editpost_keyword($pdata->clear($_GET['id'])),$adminpages);  
						  $adminpages = str_replace("{editpost_desc}",$admin->editpost_description($pdata->clear($_GET['id'])),$adminpages);   
						  $adminpages = str_replace("{editpost_content}",$admin->editpost_content($pdata->clear($_GET['id'])),$adminpages); 
						  $adminpages = str_replace("{editpost_fullcontent}",$admin->editpost_fullcontent($pdata->clear($_GET['id'])),$adminpages);    
						  $adminpages = str_replace("{editpost_link}",$admin->editpost_link($pdata->clear($_GET['id'])),$adminpages);  
						  $adminpages = str_replace("{editpost_title}",$admin->editpost_title($pdata->clear($_GET['id'])),$adminpages);  
						  $adminpages = str_replace("{editpost_cat}",$admin->editpost_cat($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{editpost_lang}",$admin->editpost_lang($pdata->clear($_GET['id'])),$adminpages);
						  
						  
						  $adminpages = str_replace("{itm_edit_title}",$admin->itm_edit_title($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_code}",$admin->itm_edit_code($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_text}",$admin->itm_edit_text($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_price}",$admin->itm_edit_price($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_tags}",$admin->itm_edit_tags($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_desc}",$admin->itm_edit_desc($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_keyw}",$admin->itm_edit_keyw($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_homechecked}",$admin->itm_edit_homechecked($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{itm_edit_link}",$admin->itm_edit_link($pdata->clear($_GET['id'])),$adminpages);
						  $adminpages = str_replace("{isset_lang}",$admin->isset_lang(),$adminpages);
						  
						  if(isset($_POST['addlang_sub'])) {
							  $admin->addlang($_POST['addlang_code'],$_POST['addlang_name']);
							  }
						  
						  $adminpages = str_replace("{itm_edit_issetchecked}",$admin->itm_edit_issetchecked($pdata->clear($_GET['id'])),$adminpages);
						  if(isset($_GET['search'])) {
						  $adminpages = str_replace("{items_list}",$admin->items_list_s($_GET['search']),$adminpages);
						  } else {
						  $adminpages = str_replace("{items_list}",$admin->items_list(),$adminpages); 
							  }
					      
						  
						  $adminpages = str_replace("{vendors_list}",$admin->vandors_list(),$adminpages); 		  
						  if(isset($_POST['addvendors_sub'])) {
							  $admin->addvendors($_POST['addvendors_name'],$_POST['addvendors_lang']);
							  }
						  
						  
						  if(isset($_GET['delete_vender'])) {
							  $admin->delete_vender($_GET['delete_vender']);
							  }
							  
						  if(isset($_GET['delete_types'])) {
							  $admin->delete_types($_GET['delete_types']);
							  }
							  
							    
						  $adminpages = str_replace("{types_list}",$admin->types_list(),$adminpages); 		  
						  if(isset($_POST['addtypes_sub'])) {
							  $admin->addtypes($_POST['addtypes_name'],$_POST['addtypes_lang']);
							  }
							  
						  if(isset($_GET['deleteitem'])) {
							   $delID = $pdata->clear($_GET['deleteitem']);
							   $admin->deleteitem($delID);
						   }
						  if(isset($_POST['edititem_sub'])) {
							  $edititem = array("title"=>$_POST['edititem_title'],
							                    "code"=>$_POST['edititem_code'],
												"cat"=>$_POST['edititem_cat'],
												"text"=>$_POST['edititem_text'],
												"price"=>$_POST['edititem_price'],
												"tags"=>$_POST['edititem_tags'],
												"desc"=>$_POST['edititem_desc'],
												"keyw"=>$_POST['edititem_keyw'],
												"lang"=>$_POST['edititem_lang'],
												"viewhome"=>$_POST['edititem_viewhome'],
												"isset"=>$_POST['edititem_isset']
												);
								$admin->edit_item($edititem);
							  }
						  if(isset($_POST['additem_sub'])) {
							  $add_item = array("title"=>$_POST['additem_title'],
							                    "link"=>$_POST['additem_link'],  
							                    "code"=>$_POST['additem_code'],
							                    "cat"=>$_POST['additem_cat'],
												"text"=>$_POST['additem_text'],
												"price"=>$_POST['additem_price'],
												"tags"=>$_POST['additem_tags'],
												"desc"=>$_POST['additem_desc'],
												"keyw"=>$_POST['additem_keyw'],
												"lang"=>$_POST['additem_lang'],
												"viewhome"=>$_POST['additem_viewhome'],  
												"isset"=>$_POST['additem_isset']
											   );
							  $admin->add_item($add_item);
							  }
						  
						  
						  if(isset($_POST['catedit_sub'])) {   
							  $editarr = array($_POST['catedit_title'], 
							                   $_POST['catedit_link'], 
											   $_POST['catedit_parent'], 
											   $_POST['catedit_tpl'], 
											   $_POST['catedit_desc'], 
											   $_POST['catedit_keyw'], 
											   $_POST['catedit_lang']);
							  $admin->catedit_write($editarr,$pdata->clear($_GET['id']));    
							   
							  }
							  
							if(isset($_POST['editpost_sub'])) {   
							  $editarr = array("title"=>$_POST['editpost_title'], 
							                   "link"=>$_POST['editpost_link'], 
											   "cat"=>$_POST['editpost_cat'], 
											   "content"=>$_POST['editpost_content'], 
											   "fullcontent"=>$_POST['editpost_fullcontent'],
											   "desc"=>$_POST['editpost_desc'], 
											   "keyw"=>$_POST['editpost_keyw'], 
											   "lang"=>$_POST['editpost_lang']);
							  $admin->editpost_write($editarr,$pdata->clear($_GET['id']));    
							   
							  }
							
							if(isset($_POST['addcat_sub'])) {   
							  $addarr = array($_POST['addcat_title'], 
							                   $_POST['addcat_link'], 
											   $_POST['addcat_parent'], 
											  
											   $_POST['addcat_tpl'], 
											   $_POST['addcat_desc'], 
											   $_POST['addcat_keyw'], 
											   $_POST['addcat_lang'],
											   $_POST['addcat_parentcat']
											   );
							  $admin->addcat_write($addarr);  
							   
							  }
							  
							 if(isset($_GET['deletecat'])) {
							   $delID = $pdata->clear($_GET['deletecat']);
							   $admin->deletecat($delID);

							  }
							  
							 
							 if(isset($_POST['addpost_sub'])) {
								 
							  $arrpost = array("title"=>$_POST['addpost_title'],
											   "link"=>$_POST['addpost_link'],
											   "cat"=>$_POST['addpost_cat'],
											   "content"=>$_POST['addpost_content'],
											   "fullcontent"=>$_POST['addpost_fullcontent'],
											   "desc"=>$_POST['addpost_desc'], 
											   "keyw"=>$_POST['addpost_keyw'],
											   "lang"=>$_POST['addpost_lang']);
							  
                               
							   $admin->add_publication($arrpost);
							  }
							  
							  if(isset($_GET['deletepost'])) {
							   $delID = $pdata->clear($_GET['deletepost']);
							   $admin->deletepost($delID);

							  }
						   
					 } else {
						  $report->error("ERROR!!");
					 }
					 
			 $adminpages = str_replace("{host}","http://".$_SERVER['HTTP_HOST']."/admin",$adminpages);
			 
		 }
		 
		 $replace = str_replace("{admincontent}",$adminpages ,$replace);
        
		 $replace = str_replace("{host}","http://".$_SERVER['HTTP_HOST']."/admin",$replace);
		 
		 $replace = str_replace("{site}","http://".$_SERVER['HTTP_HOST'],$replace);
		 
         return $replace;
   }

}
$option = new pagerouter();
?>