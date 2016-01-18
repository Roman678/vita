<div class="grey title_adm"><center><h4>Product Types</h4></center></div>


<table class="add_cat_table">
 <form method="post" action="">
 <tr><td>name type product</td> <td><input type="text" name="addtypes_name" placeholder="" required/></td></tr>
<tr><td>language</td> <td><select name="addtypes_lang">{language_list}</option></select></td></tr> 
 <tr><td></td> <td><input type="submit" name="addtypes_sub" value="add"/></td></tr>
 </form>
 </table>



 <table class="catlist_table">
 <tr class="green text_center" style="text-transform:uppercase; color:#FFF;">
 <td>ID</td>
 <td>TYPES NAMES</td>
 <td>LANG</td>
 <td>EDIT</td> 

 </tr>
 
 {types_list}
 </table>