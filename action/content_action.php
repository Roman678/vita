<?php 
    
	function pagination($cat) {
		 $superquery = new superquery();
		 $post_arr = $superquery->db("SELECT * FROM smrt_pg WHERE category IN (SELECT id FROM smrt_ctg WHERE title='$cat') AND lang ='$_GET[lang]'");
		 $count = mysql_num_rows($post_arr);
		 $getcountpage = ceil($count / 5);
		 
		 if($getcountpage > 1) {
		 for($i=1;$i<=$getcountpage;$i++) {
		  $page .= "<li><a href='http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/".$_GET['category']."/?page=$i'>$i</a></</li>";    }
		  }
		  return $page;
		}
		
		
		
	function post_search() {
	        $superquery = new superquery();
			$shell = new templ();
			
			$get_post_arr = $superquery->db("SELECT * FROM smrt_shop WHERE title LIKE '%".$_GET['post_search']."%' AND lang='$_GET[lang]'");
			$get_post = mysql_fetch_array($get_post_arr);
			

			do {     
			         $cat_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$get_post[category]'");
					 $cat = mysql_fetch_array($cat_arr);
					 
					 $shab = $shell->shell("short_shop");
					 
					 $shab = str_replace("{item_title}","<a href='http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/$cat[link]/$get_post[link]'>$get_post[title]</a>",$shab);
					 
					 $item_img = explode(",", $get_post['images']);
					 
					 $shab = str_replace("{item_image}","<img class='imgproduct' src='/uploads/shop/$item_img[0]' alt=''/>",$shab);
					 $shab = str_replace("{item_price}",$get_post['price'],$shab);
					 
					 $shab = str_replace("{itemID}",$get_post['id'],$shab);
					 
					 $items .= $shab;
				}
				
			
		while($get_post = mysql_fetch_array($get_post_arr));
		
		
		return "<div class='container'>".$items."</div>";
		}
		
	
			
	function shortpost_action($template,$id) {
		$superquery = new superquery();
		$limit = 5;
		
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
			
	    $page_arr = $superquery->db("SELECT * FROM smrt_pg WHERE category = '".$id."' AND lang='$_GET[lang]' LIMIT $start,$limit")or die (mysql_error());
		$page = mysql_fetch_array($page_arr);
		
		$shell = new templ();
		
		
		do {
		$shab = $shell->shell($template);
		$shab = str_replace("{page_content}",$page['short_text'],$shab); 	
		$shab = str_replace("{page_title}","<a href='http://".HOST."/".$_GET['lang']."/".$_GET['category']."/".$page['link']."'>".$page['title']."</a>",$shab);
		$date = explode(" ",$page['data_write']);
		$shab = str_replace("{date_publication}",$date[0],$shab);
		$html .= $shab;
			}
			
			
		while($page = mysql_fetch_array($page_arr));
		
		
		return $html;
		}
	
	function cat_menu() {
		$superquery = new superquery();
	    $cat_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE parrent_id=1 AND parrent_cat > 0 AND lang='$_GET[lang]'")or die (mysql_error());
		$cat = mysql_fetch_array($cat_arr);
		
		do {
		
		$list .= "<li><a href='/".$_GET['lang']."/$cat[link]'>$cat[title]</a></li>";
			
			}
		while($cat = mysql_fetch_array($cat_arr));
		
		return $list;
		}
	
	function fullpost_action($id) {
		$superquery = new superquery();
	    $page_arr = $superquery->db("SELECT * FROM smrt_pg WHERE link = '$id' AND lang='$_GET[lang]'")or die (mysql_error());
		$page = mysql_fetch_array($page_arr);

		return $page;
	
	}
	
	
	
	
	function shortitem_action($template,$id) {
		$superquery = new superquery();
	    
		$items_arr = $superquery->db("SELECT * FROM smrt_shop WHERE category = '".$id."' AND lang='$_GET[lang]'")or die (mysql_error());
		$item = mysql_fetch_array($items_arr);
		
		$shell = new templ();
		
		
		do {
		$get_cat_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE id='".$id."' AND lang='$_GET[lang]'");
		$get_cat = mysql_fetch_array($get_cat_arr);
		
		         $shab = $shell->shell($template);
		         $shab = str_replace("{item_title}","<a href='http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/$get_cat[link]/$item[link]'>$item[title]</a>",$shab);
				 
				 $item_img = explode(",", $item['images']);
				 
			     $shab = str_replace("{item_image}","<img class='imgproduct' src='/uploads/shop/$item_img[0]' alt=''/>",$shab);
				 $shab = str_replace("{item_price}",$item['price'],$shab);
				 
				 $items .= $shab;
			}
			
			
		while($item = mysql_fetch_array($items_arr));
		
		
		return "<div class='container'>".$items."</div>";
		}
	
	
	
	
		
	
	function fullitem_action($id) {
		$superquery = new superquery();
	    $page_arr = $superquery->db("SELECT * FROM smrt_shop WHERE link = '$id' AND lang='$_GET[lang]'")or die (mysql_error());
		$page = mysql_fetch_array($page_arr);
		
		return $page;
		}
	
	
	
	function home_items() {
		
		$report = new report_error();
		$superquery = new superquery();
		
		if(file_exists("view/homeitems.tpl")) {
			
			
			
			$get_items_arr = $superquery->db("SELECT * FROM smrt_shop WHERE home='on' AND isset='on' AND lang='".$_GET['lang']."'");
			$get_items = mysql_fetch_array($get_items_arr);
			
			
			do {
			$get_cat_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE id='$get_items[category]'");
			$get_cat = mysql_fetch_array($get_cat_arr);
                 
				 $homeitems = file_get_contents("view/homeitems.tpl");
				 $homeitems = str_replace("{item_title}","<a href='http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/$get_cat[link]/$get_items[link]/'>".$get_items['title']."</a>",$homeitems);
				 
				 $item_img = explode(",",$get_items['images']);
			     $homeitems = str_replace("{item_image}","<img class='zoom prodimg' id='' src='/uploads/shop/$item_img[0]' alt=''/>",$homeitems);
				 $homeitems = str_replace("{item_price}",$get_items['price'],$homeitems);
				 $homeitems = str_replace("{itemID}",$get_items['id'],$homeitems);
				 
				 $items .= $homeitems;
			 }
			
			while($get_items = mysql_fetch_array($get_items_arr));
			
			return $items;
		
		
		
		} else {
		     $report->error("homeitems.tpl not found");
			}
		}
	
	
	 function last_news() {
		$report = new report_error();
		$superquery = new superquery();
		$getblog_array = $superquery->db("SELECT * FROM smrt_pg WHERE category IN (SELECT id FROM smrt_ctg WHERE template = 'news') AND lang='$_GET[lang]' ORDER BY id DESC LIMIT 0,4");
		$getblog = mysql_fetch_array($getblog_array);
		do {
       
	    preg_match_all("|<[^>]+>(.*)/>|U", $getblog['short_text'], $out, PREG_SET_ORDER);
		
		$pos = strpos($getblog['short_text'],"/>");
        substr($getblog['short_text'],-$pos);
		
		$post = str_replace($out[0][0],"",$getblog['short_text']);
		
		$post = substr($post,0,250);
		
		$post = str_replace("<h1>","",$post);
		$post = str_replace("</h1>","",$post);
		$post = str_replace("<h2>","",$post);
		$post = str_replace("</h2>","",$post);
		$post = str_replace("<h3>","",$post);
		$post = str_replace("</h3>","",$post);
		$post = str_replace("<h4>","",$post);
		$post = str_replace("</h4>","",$post);
		$post = str_replace("<h5>","",$post);
		$post = str_replace("</h5>","",$post);
		$pos = strlen($post);
		
		if(strlen($getblog['title']) > 50) {
			$title = substr($getblog['title'],0,50);
			$title = $title."...";
			} else {
			 $title = $getblog['title'];
				}
				
		$res .= "<div class='span3 lastnews_box'>
					 <div class='lastnews_title'>
					 <a href='http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/news/$getblog[link]/'>".$title."</a>
					 </div>
					 <div style='max-height:205px;height:205px; overflow:hidden;' class='grid'>
					   

					    <a class='linktopnews' href='http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/news/$getblog[link]/'>".$out[0][0]."</a>

					 </div>
					 <div class=lastnews_text>
					  $post....
					  </div>
				 </div>";	
			}
		while($getblog = mysql_fetch_array($getblog_array));

        return "<div class='container'>".$res."</div>";
		 }
		 
		 
		 
     function last_blog() {
		$report = new report_error();
		$superquery = new superquery();
		
		$getblog_array = $superquery->db("SELECT * FROM smrt_pg WHERE category IN (SELECT id FROM smrt_ctg WHERE template = 'blog') AND lang='$_GET[lang]' ORDER BY data_write DESC LIMIT 0,4");
		$getblog = mysql_fetch_array($getblog_array);
		do {

	    preg_match_all("|<[^>]+>(.*)/>|U", $getblog['short_text'], $out, PREG_SET_ORDER);

		$res .= "<div class='span3 lastblog_box '>
                 
				 <a class='newslnkh' href='http://".$_SERVER['HTTP_HOST']."/".$_GET['lang']."/blog/$getblog[id]/'><div class='lastblog_title'>$getblog[title]</div>".$out[0][0]."</a>
                 
				 </div>";	
			}
		while($getblog = mysql_fetch_array($getblog_array));

        return "<div class='container'>".$res."</div>";
		 }
		 
		 
		 
    function types_link() {
		   $superquery = new superquery();
		   $arr_types = $superquery->db("SELECT * FROM smrt_types WHERE lang='".$_GET['lang']."'");
		   $types = mysql_fetch_array($arr_types);
		   
		   do {
			
			$types_list .= "<li><a href=''>$types[name_types]</a></li>";
			   
			   }
		   while($types = mysql_fetch_array($arr_types));
		   
		   return $types_list;
		   }
		   
		   
	 function vendors_link() {
		   $superquery = new superquery();
		   $arr_vendors = $superquery->db("SELECT * FROM smrt_vendors WHERE lang='".$_GET['lang']."'");
		   $vendors = mysql_fetch_array($arr_vendors);
		   
		   do {
			
			$vend_list .= "<li><a href=''>$vendors[name_vendors]</a></li>";
			   
			   }
		   while($vendors = mysql_fetch_array($arr_vendors));
		   
		   return $vend_list;
		   }
	 function language_list() {
			$superquery = new superquery();
			$lang_arr_types = $superquery->db("SELECT * FROM `language`");
			$lang_types = mysql_fetch_assoc($lang_arr_types);
			
			do {
			$res .= "<li><a href='/$lang_types[code]/'>$lang_types[name]</a></li>";
			}
			while($lang_types = mysql_fetch_assoc($lang_arr_types));
			
			return $res;
	
		 }
	
?>