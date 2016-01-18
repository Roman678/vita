<div class="grey title_adm"><center><h4>Product Vendors</h4></center></div>


<table class="add_cat_table">
 <form method="post" action="">
 <tr><td>name vendor product</td> <td><input type="text" name="addvendors_name" placeholder="" required/></td></tr>
<tr><td>language</td> <td><select name="addvendors_lang">{language_list}</option></select></td></tr> 
 <tr><td></td> <td><input type="submit" name="addvendors_sub" value="add"/></td></tr>
 </form>
 </table>



 <table class="catlist_table">
 <tr class="green text_center" style="text-transform:uppercase; color:#FFF;">
 <td>ID</td>
 <td>VENDORS NAMES</td> 
 <td>LANG</td>
 <td>EDIT</td> 
 </tr>
 
 {vendors_list}
 </table>