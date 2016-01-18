<?php

class autorisation {
	
	protected function loginAction($data) {
		
		$report = new report_error();
		
		$hash = md5($data[0].$data[1]);
		
		$getuser = mysql_query("SELECT * FROM smrt_usr WHERE md5 ='$hash'")or die(mysql_error());
		$takeusr = mysql_fetch_assoc($getuser);
		
		if(mysql_num_rows($getuser)>0) {
	                  
					  if(!$_COOKIE['AU'] || $_COOKIE['AU'] == 0) {
						  
						  setcookie("AU", 1, time() + 8000, "/");
						  setcookie("AUTIME", time(), time() + 8000, "/");
						  setcookie("login", $takeusr['login'], time() + 8000, "/");

						  
						  header("Location: http://".$_SERVER['HTTP_HOST']."/admin");
						  
					  } else {
						  
						  $_COOKIE['AU'] = 1;
					  }
		} else {
					  if($_COOKIE['AU'] == 1) {
					      setcookie("AU", 0, time() + 8000, "/");
					  }
					  $report->error("ERROR");	
		}

	 }

}




class mirror extends autorisation {
    
	function loginMirror($data) {
	
	     $this->loginAction($data);
		 		 
	}

}

$auth = new mirror();
/*==============================================*/

class admincontent {
	
	
	
	
	/*-------------add items-------------*/
	function add_item($add_item) {
		$superquery = new superquery();
		$refresh = new refresh();
        
		
        $count = count($_FILES['files']);
		
			for($i=0; $i<=$count; $i++) {
			  
				  $file = str_replace(" ","",$file = trim($_FILES['files']['name'][$i]));
				  
				  $tmp_img = array();
				  
				  if(!file_exists("/uploads/shop/".$file)) {
					  move_uploaded_file($_FILES['files']['tmp_name'][$i],$_SERVER['DOCUMENT_ROOT']."/uploads/shop/".$file);
				  }
				 
			 $tmp_img = implode(",", $_FILES['files']['name']);
				  
			 }

		$superquery->db("INSERT INTO smrt_shop (title,link,category,text,images,tags,description,keyword,lang,code,isset,price,home) VALUES ('$add_item[title]','$add_item[link]','$add_item[cat]','$add_item[text]','$tmp_img','$add_item[tags]','$add_item[desc]','$add_item[keyw]','$add_item[lang]','$add_item[code]','$add_item[isset]','$add_item[price]','$add_item[viewhome]')");
		
		$refresh->redirect('shop');
		}
		
	/*------------edit item--------------*/
	function edit_item($edititem) {
		$superquery = new superquery();
		$refresh = new refresh();
		$superquery->db("UPDATE smrt_shop SET title='$edititem[title]',category='$edititem[cat]',text='$edititem[text]',tags='$edititem[tags]',description='$edititem[desc]',keyword='$edititem[keyw]',lang='$edititem[lang]',code='$edititem[code]',isset='$edititem[isset]',price='$edititem[price]',home='$edititem[viewhome]' WHERE id = '$_GET[id]'");
		$refresh->redirect('shop');
		}	
		
		
	/*-------------add post--------------*/
	function add_publication($arraypost) {
        
		$superquery = new superquery();
		$refresh = new refresh();
		
		$content = addslashes($arraypost['content']);
		$fullcontent = addslashes($arraypost['fullcontent']);
			
		$superquery->db("INSERT INTO smrt_pg (link,category,title,description,keyword,short_text,full_text,img,lang) VALUES ('$arraypost[link]','$arraypost[cat]','$arraypost[title]','$arraypost[desc]','$arraypost[keyw]','$content','$fullcontent','$img_list','$arraypost[lang]')");
		
		$refresh->redirect('publication');

		}	
		
		
		
		
		
	/*------------category list-------------------*/	
	function catlist() {
		$superquery = new superquery();
		
		$catlist_arr = $superquery->db("SELECT * FROM smrt_ctg ORDER BY parrent_id DESC");
		$catlist = mysql_fetch_array($catlist_arr);
		
		
		do{
			
			if($catlist['parrent_cat'] >0) {
			  
			  $titleparent_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE id = '$catlist[parrent_cat]'");
			  $titleparent = mysql_fetch_array($titleparent_arr);
			  
			  $pc = "<span class='badge'>$titleparent[title]</span>&#9658;";	
				} else {
				$pc = "";	
					}					
            switch($catlist['parrent_id']) {
				case"1":
				  $typecat="<span style='color:red;'>shop</span>";
				break;
				
				case"0":
				   $typecat="<span style='color:blue;'>post</span>";
				break;
				}
			$list .= "
			          <script type='text/javascript'>
					   $(document).ready(function() {
   
					    $('.catdel').on('click',function() {
							var id = $(this).attr('data-id');
							$(this).html('<center>sure?</center> <center><a href=\'?option=category&deletecat='+id+'\'>YES</a></center>');
							});
							
						});	
					  </script>
					  <tr class='grey'>
						<td>$typecat</td> 
						<td>$catlist[link]</td> 
						<td>$pc $catlist[title]</td> 
						<td>$catlist[template]</td> 
						<td>$catlist[description]</td> 
						<td>$catlist[lang]</td>
						<td>
						   <a class='rot' href='?option=editcategory&id=$catlist[id]'><img height='30' src='../admin/images/ico_edit.png' title='edit'/></a>
						   <a class='rot catdel' data-id='$catlist[id]'><img height='30' src='../admin/images/ico_delete.png' title='delete'/></a>
						   <div class='promt'></div>
						</td>
					  </tr>
					  
					  ";
			
								
			 
		}	
		while($catlist = mysql_fetch_array($catlist_arr));
		
		return $list;
		}
		
		
	/*------------category list-------------------*/	 
	function selectlistcat() {
	    $superquery = new superquery();
		
		$catlist_arr = $superquery->db("SELECT * FROM smrt_ctg");
		$catlist = mysql_fetch_array($catlist_arr);
		do{
		
		$list .= "<option value='$catlist[id]'> $catlist[title]&nbsp;($catlist[lang])</option>";
			}
		while($catlist = mysql_fetch_array($catlist_arr));
		
		return $list;		
			}
	 /*-----------shop pagination--------------------*/	
	 function shoppagination() {
		 $superquery = new superquery();
		 $post_arr = $superquery->db("SELECT * FROM smrt_shop");
		 $count = mysql_num_rows($post_arr);
		 $getcountpage = ceil($count / 10);
		 
		 for($i=1;$i<=$getcountpage;$i++) {
		  $page .= "<li><a href='http://".$_SERVER['HTTP_HOST']."/admin/?option=shop&page=$i'>$i</a></li>"; 
		  }
		  return $page;
		 }			
	 /*--------------items list-----------------*/   
	 function items_list() {
		$superquery = new superquery();
		$limit = 10;
		
		if(!$_GET['page']) {
		$start=0;
		} else {
		  if($_GET['page']==1) {
			 $start = 0;  
			  }	else {
			  $start = $_GET['page']-1;
		      $start =	$start * $limit;
			  }
			}
			
		$post_arr = $superquery->db("SELECT * FROM smrt_shop  ORDER BY category LIMIT $start,$limit");
		$post = mysql_fetch_array($post_arr);
		
	    if(count($post_arr) != 0) {
			
		do{
		
		$get_ctg_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$post[category]'");
		$get_ctg = mysql_fetch_array($get_ctg_arr);
		
		if(mysql_num_rows($get_ctg_arr) > 0) {
		if($get_ctg['title'] == "") {
			$getctg = "основная";
			} else {
			$getctg = $get_ctg['title'];
			}
		$list .= " 
		         <script type='text/javascript'>
					   $(document).ready(function() {
						    
					    $('.catdel').on('click',function() {
						  var id = $(this).attr('data-id');	
						  $(this).html('<center>sure?</center> <center><a href=\'?option=shop&deleteitem='+id+'\'>YES</a></center>');	
						});
							
						});	
				 </script>
					  
				 <tr class='grey'>
		            <td>$post[title]</td>
					<td>$post[code]</td>
					<td>$getctg</td> 
					<td>$post[price]</td> 
					<td>$post[lang]</td>
					<td>
					   <a class='rot' href='?option=editshop&id=$post[id]'><img height='30' src='../admin/images/ico_edit.png' title='edit'/></a>
					   <a class='rot catdel' data-id='$post[id]'><img height='30' src='../admin/images/ico_delete.png' title='delete'/></a>
					   <div class='promt'></div>
					   
					</td>
				  </tr>";
		}
			}
		while($post = mysql_fetch_array($post_arr));
		}
		return $list;
		
		 }
	 /*--------------items list search-----------------*/   
	 function items_list_s($srch) {
		 $superquery = new superquery();
		
		$post_arr = $superquery->db("SELECT * FROM smrt_shop WHERE title LIKE '%$srch%' OR tags LIKE '%$srch%' ORDER BY category");
		$post = mysql_fetch_array($post_arr);
		
		if(mysql_num_rows($post_arr) > 0) { 
	
		do{
		
		$get_ctg_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$post[category]'");
		$get_ctg = mysql_fetch_array($get_ctg_arr);
		
		if($get_ctg['title'] == "") {
			$getctg = "основная";
			} else {
			$getctg = $get_ctg['title'];
			}
		$list .= " 
		         <script type='text/javascript'>
					   $(document).ready(function() {
						    
					    $('.catdel').on('click',function() {
						  var id = $(this).attr('data-id');	
						  $(this).html('<center>sure?</center> <center><a href=\'?option=shop&deleteitem='+id+'\'>YES</a></center>');	
						});
							
						});	
				 </script>
					  
				 <tr class='grey'>
		            <td>$post[title]</td>
					<td>$post[code]</td>
					<td>$getctg</td> 
					<td>$post[price]</td> 
					<td>$post[lang]</td>
					<td>
					   <a class='rot' href='?option=editshop&id=$post[id]'><img height='30' src='../admin/images/ico_edit.png' title='редактировать'/></a>
					   <a class='rot catdel' data-id='$post[id]'><img height='30' src='../admin/images/ico_delete.png' title='delete'/></a>
					   <div class='promt'></div>
					   
					</td>
				  </tr>";
			}
		while($post = mysql_fetch_array($post_arr));
		} else {
		$list = "<tr><td>ничего не найдено</td></tr>";
			}
		return $list;
		 
		 }	
	/*-----------post pagination--------------------*/	
	 function postpagination() {
		 $superquery = new superquery();
		 $post_arr = $superquery->db("SELECT * FROM smrt_pg");
		 $count = mysql_num_rows($post_arr);
		 $getcountpage = ceil($count / 10);
		 
		 for($i=1;$i<=$getcountpage;$i++) {
		  $page .= "<li><a href='http://".$_SERVER['HTTP_HOST']."/admin/?option=publication&page=$i'>$i</a></li>"; 
		  }
		  return $page;
		 }	
	 /*-----------post list--------------------*/
	 function publicationlist() {
		$superquery = new superquery();
		$limit = 10;
		
		if(!$_GET['page']) {
		$start=0;
		} else {
		  if($_GET['page']==1) {
			 $start = 0;  
			  }	else {
			  $start = $_GET['page']-1;
		      $start =	$start * $limit;
			  }
			}
		
		$post_arr = $superquery->db("SELECT * FROM smrt_pg  ORDER BY category LIMIT $start,$limit");
		$post = mysql_fetch_array($post_arr);
		
	
		do{
		
		$get_ctg_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$post[category]'");
		$get_ctg = mysql_fetch_array($get_ctg_arr);
		
		if($get_ctg['title'] == "") {
			$getctg = "основная";
			} else {
			$getctg = $get_ctg['title'];
			}
		$list .= " 
		         <script type='text/javascript'>
					   $(document).ready(function() {
						    
					    $('.catdel').on('click',function() {
						  var id = $(this).attr('data-id');	
						  $(this).html('<center>sure?</center> <center><a href=\'?option=publication&deletepost='+id+'\'>YES</a></center>');	
						});
							
						});	
				 </script>
					  
				 <tr class='grey'>
		            <td>$post[id]</td>
					<td>$getctg</td> 
					<td>$post[title]</td> 
					<td>$post[lang]</td>
					<td>
					   <a class='rot' href='?option=editpublication&id=$post[id]'><img height='30' src='../admin/images/ico_edit.png' title='editь'/></a>
					   <a class='rot catdel' data-id='$post[id]'><img height='30' src='../admin/images/ico_delete.png' title='delete'/></a>
					   <div class='promt'></div>
					   
					</td>
				  </tr>";
			}
		while($post = mysql_fetch_array($post_arr));
		
		return $list;
	    }
		
		
	 /*---------------delete post-----------------*/
	 function deletepost($del) {
		 $superquery = new superquery();
		 $get = new refresh();
		 $get_img_arr = $superquery->db("SELECT * FROM smrt_pg WHERE id ='$del'");
		 $get_img = mysql_fetch_array($get_img_arr);
		 
		 $arrimg = explode("|",$get_img['img']);
		 $count = count($arrimg);

		 for($i=0;$i<=$count;$i++) {
		   $arrimg[$i] = trim($arrimg[$i]);
		   if($arrimg[$i] !="") {
		   unlink("../uploads/".$arrimg[$i]);
		   }
		  }
		 
		 $superquery->db("DELETE FROM smrt_pg WHERE id ='$del'");
		 $get->redirect("publication");
		 }
	 
	 /*---------------delete item-----------------*/
	 function deleteitem($del) {
		 $superquery = new superquery();
		 $get = new refresh();
		 $get_img_arr = $superquery->db("SELECT * FROM smrt_shop WHERE id ='$del'");
		 $get_img = mysql_fetch_array($get_img_arr);
		 
		 $arrimg = explode(",",$get_img['images']);
		 $count = count($arrimg);

		 for($i=0;$i<=$count;$i++) {
		   $arrimg[$i] = trim($arrimg[$i]);
		   if($arrimg[$i] !="") {
		   unlink("../uploads/shop/".$arrimg[$i]);
		   }
		  }
		 
		 $superquery->db("DELETE FROM smrt_shop WHERE id ='$del'");
		 $get->redirect("shop");
		 }    
		 
		  
	 /*---------------cat delete-----------------*/  
	 function deletecat($del) {
		 $superquery = new superquery();
		 $get = new refresh();
		 $superquery->db("DELETE FROM smrt_ctg WHERE id ='$del'");
		 $get->redirect("category");
		 }
		 
		 
		 
	 /*--------------catedit write---------------*/ 
	 
	 function catedit_write($array, $id) {
		 $get = new refresh();
		 
		 $superquery = new superquery();
		 $arraylang = $superquery->db("UPDATE smrt_ctg SET title='$array[0]', link='$array[1]', parrent_id='$array[2]' ,template='$array[3]' ,description='$array[4]' , keyword='$array[5]' ,lang='$array[6]' WHERE id='$id'");
		 $get->redirect("category");
		 }
		 
	 /*--------------editpost write---------------*/ 
	 
	 function editpost_write($array, $id) {
		 $get = new refresh();
		 
		 $cont = addslashes($array['content']);
		 
		 $fullcont = addslashes($array['fullcontent']);
		 
		 $superquery = new superquery();
		 
		 $arraylang = $superquery->db("UPDATE smrt_pg SET link='$array[link]', category='$array[cat]', title='$array[title]' ,description='$array[desc]' ,keyword='$array[keyw]' , short_text='$cont' ,full_text='$fullcont', lang='$array[lang]' WHERE id='$id'");
		 $get->redirect("publication");
		 }
	
	/*--------------addcat write---------------*/ 
	 
	 function addcat_write($array) {
		 $get = new refresh();
		 
		 $superquery = new superquery();
		 $arraylang = $superquery->db("INSERT INTO smrt_ctg  (title,link,parrent_id,template,description,keyword,lang,parrent_cat) VALUES ('$array[0]','$array[1]','$array[2]','$array[3]','$array[4]','$array[5]','$array[6]','$array[7]')");
		 $get->redirect("category");
		 }
		 
		 
     /*----------------lang list-----------------*/
	 
	 function language_list() {
		 $superquery = new superquery();
		 $arraylang = $superquery->db("SELECT * FROM language");
		 $lang = mysql_fetch_array($arraylang);
		 do {
		 $langlist .="<option value='$lang[code]'>$lang[name]</option>";
			 }
		 while($lang = mysql_fetch_array($arraylang));
		 
		 return $langlist;
		 }	 
	 
	 /*------------catedit show in field--------------*/   
	 
	 function catedit_keyword($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['keyword'];
		 }
	 function catedit_description($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['description'];
		 }
	 function catedit_tpl($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['template'];
		 }
	 function catedit_link($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['link'];
		 }
	 function catedit_title($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['title'];
		 }
	 function catedit_parrentcat($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['parrent_id'];
		 }
	 function catedit_lang($id) {
		 $superquery = new superquery();
		 $arraylang = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$id'");
		 $datalang = mysql_fetch_array($arraylang);
		 $array = $superquery->db("SELECT * FROM language WHERE code='$datalang[lang]'");
		 $lang = mysql_fetch_array($array);
		 
		 return "<option value='$lang[code]'>$lang[name]</option>";
		 }
	  /*------------postedit show in field--------------*/   
	 
	 function editpost_keyword($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['keyword'];
		 }
	 function editpost_description($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");   
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['description'];
		 }
	 function editpost_content($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['short_text'];
		 }
	 function editpost_fullcontent($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['full_text'];
		 }
	 function editpost_link($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['link'];
		 }
	 function editpost_title($id) {
		 $superquery = new superquery();
		 $arraycat = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");
		 $datacat = mysql_fetch_array($arraycat);
		 return $datacat['title'];
		 }
	 function editpost_cat($id) {
		 $superquery = new superquery();
		 $arraypost = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");
		 $post = mysql_fetch_array($arraypost);
		 
		 if($post['category'] != 0) {
		 $arraycat = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$post[category]'");
		 $datacat = mysql_fetch_array($arraycat);
		 $opt = "<option value='$datacat[id]'>$datacat[title]</option>";
		 } else {
		 $opt = "<option value='0'>основная</option>";
			 }
		 return $opt;
		 }
	 function editpost_lang($id) {
		 $superquery = new superquery();
		 $arraylang = $superquery->db("SELECT * FROM smrt_pg WHERE id='$id'");
		 $datalang = mysql_fetch_array($arraylang);
		 $array = $superquery->db("SELECT * FROM language WHERE code='$datalang[lang]'");
		 $lang = mysql_fetch_array($array);
		 
		 return "<option value='$lang[code]'>$lang[name]</option>";
		 }	
		 
		/*-------------item edit-------------*/ 
	  function itm_edit_title($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['title'];
		  }
	  function itm_edit_code($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['code'];
		  }	
	  function itm_edit_text($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['text'];
		  }	
	  function itm_edit_price($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['price'];
		  }	
	  function itm_edit_tags($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['tags'];
		  }	
	  function itm_edit_desc($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['description'];
		  }	
	  function itm_edit_keyw($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['keyword'];
		  }
	   function itm_edit_link($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  return $dataitm['link'];
		  }		
	  function itm_edit_homechecked($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		  switch($dataitm['home']) {
			  case"on":
			   $res = "checked";
			  break;
			  
			  case"":
			   $res = "";
			  break;
			  }
			return $res;
		  }	
	  function itm_edit_issetchecked($id) {
		  $superquery = new superquery();
		  $dataitm_array = $superquery ->db("SELECT * FROM smrt_shop WHERE id='$id'");
		  $dataitm = mysql_fetch_array($dataitm_array);
		   switch($dataitm['isset']) {
			  case"on":
			   $res = "checked";
			  break;
			  
			  case"":
			   $res = "";
			  break;
			  }
			return $res;

		  }	
		  
	 /*vendors and types add*/
	 
	  function addvendors($name,$lang) {
		  $superquery = new superquery();
		  $refresh = new refresh();
		  
		  $superquery->db("INSERT INTO smrt_vendors (name_vendors,lang) VALUES ('$name','$lang')");
		  $refresh->redirect('vendors');
		  }
	   
	   function vandors_list() {
		   $superquery = new superquery();
		   $arr_vendors = $superquery->db("SELECT * FROM smrt_vendors");
		   $vendors = mysql_fetch_array($arr_vendors);
		   
		   if(mysql_num_rows($arr_vendors) > 0) {
		   do {
			
			$vend_list .= "<tr class='grey'><td>$vendors[id]</td><td>$vendors[name_vendors]</td><td>$vendors[lang]</td><td><a href='http://".$_SERVER['HTTP_HOST']."/admin/?option=vendors&delete_vender=$vendors[id]' class='btn'>delete</a></td></tr>";
			   
			   }
		   while($vendors = mysql_fetch_array($arr_vendors));
		   }
		   return $vend_list;
		   }
		   
		function delete_vender($id) {
		   $superquery = new superquery();
		   $refresh = new refresh();
		   
		   $superquery->db("DELETE FROM smrt_vendors WHERE id='$id'");
		   $refresh->redirect('vendors');
			}
			
		function delete_types($id) {
		   $superquery = new superquery();
		   $refresh = new refresh();
		   
		   $superquery->db("DELETE FROM smrt_types WHERE id='$id'");
		   $refresh->redirect('types');
			}  
		   
		   
	   function addtypes($name,$lang) {
		  $superquery = new superquery();
		  $refresh = new refresh();
		  
		  $superquery->db("INSERT INTO smrt_types (name_types, lang) VALUES ('$name','$lang')");
		  $refresh->redirect('types');
		  }
	   
	   function types_list() {
		   $superquery = new superquery();
		   $arr_types = $superquery->db("SELECT * FROM smrt_types");
		   $types = mysql_fetch_array($arr_types);
		   
		   if(mysql_num_rows($arr_types) > 0) {
		   do {
			
			$types_list .= "<tr class='grey'><td>$types[id]</td><td>$types[name_types]</td><td>$types[lang]</td><td><a href='http://".$_SERVER['HTTP_HOST']."/admin/?option=types&delete_types=$types[id]' class='btn'>delete</a></td></tr>";
			   
			   }
		   while($types = mysql_fetch_array($arr_types));
		   }
		   return $types_list;
		   }
		   
		   
		function isset_lang() {
			$superquery = new superquery();
			$lang_arr_types = $superquery->db("SELECT * FROM `language`");
			$lang_types = mysql_fetch_assoc($lang_arr_types);
			
			do {
			$res .= "<tr><td>$lang_types[code]</td> <td>$lang_types[name]</td></tr>";
			}
			while($lang_types = mysql_fetch_assoc($lang_arr_types));
			
			return $res;
			}	
	    function addlang($addlang_code,$addlang_name) {
			$superquery = new superquery();
			$refresh = new refresh();
			$lang_add_types = $superquery->db("INSERT INTO `language` (code, name) VALUES ('$addlang_code','$addlang_name')");
			$refresh->redirect('options');
			}	  		  		  		  		  		  		  	  	 
	 
	}
$admin = new admincontent();	
	
	
	
	
?>