<?php
function products_list($lang) {
	
  if($_SESSION['products']) {
	   
    $count_prod = $_SESSION['item_count'];
	

	if(!$_SESSION['fullprice']) {
			$_SESSION['fullprice'] = 0;
			}	
	
	if(isset($_SESSION['products'])) {
	
	    $pr_count = count($_SESSION['products']);
		
		foreach($_SESSION['products'] as $val) {
			$sum = $sum + $val['price'];
			}
		$_SESSION['fullprice'] = $sum;
	
	if(!$lang){
		$lang = "en";
	} else {
		$lang = $lang;	
	}	
		
	foreach($_SESSION['products'] as $key=>$value) {
		
	
	    $tax = $value['price']*8/100;
		$min_price = $value['price'] - $tax;
		
		$img = explode(",",$value['images']);
		$list .=  "<tr>
		<td><img width='50' src='/uploads/shop/$img[0]'/></td>
		<td>$value[title]</td>
		<td>$min_price &nbsp;<b>CHF</b></td>
		<td>$tax &nbsp;<b>CHF</b></td>
		<td>$value[price]&nbsp;<b>CHF</b></td>
		<td>$value[count]</td>
		
		<td><a href='http://".$_SERVER['HTTP_HOST']."/".$lang."/cart/?unwrite=$key'><span class='btn delproduct'>delete</span></a></td>
		
		</tr>";
	   }
	  }
	 }
	return $list;
}
?>