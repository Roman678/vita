<?php

function getcat_action($cat) {
	$superquery = new superquery();
	if($cat=="cart") {
	$category = array("parrent_id"=>2,"template"=>"cart","title"=>"корзина");
		}else {
	$category_arr = $superquery->db("SELECT * FROM smrt_ctg WHERE link = '".$cat."'")or die (mysql_error());
	$category = mysql_fetch_array($category_arr);
		}
	return $category;
	}
	
	

?>