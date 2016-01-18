<div class="grey title_adm"><center><h4>EDIT CATEGORY</h4></center></div>



<table class="add_cat_table">
 <form method="post" action="">
 <tr><td>title</td> <td><input type="text" name="catedit_title" value="{catedit_title}" required/></td></tr>
 <tr><td>link (english only)</td> <td><input type="text" name="catedit_link" value="{catedit_link}" required/></td></tr>
 <tr><td>category for .....</td> <td><select name="catedit_parent"><option value="0">publication</option><option value="1">shop</option></select></td></tr>
 <tr><td>template file</td> <td><input type="text" name="catedit_tpl" value="{catedit_tpl}"  required/></td></tr>
 <tr><td>description</td> <td><input type="text" name="catedit_desc" value="{catedit_description}" /></td></tr>  
 <tr><td>keyword</td> <td><input type="text" name="catedit_keyw" value="{catedit_keyword}" /></td></tr>
 <tr><td>language</td> <td><select name="catedit_lang">{catedit_lang}{language_list}</option></select></td></tr>  
 <tr><td></td> <td><input type="submit" name="catedit_sub" value="edit"/></td></tr>
 </form>
 </table>
 
 <script type="text/javascript">
   $(document).ready(function(e) {
     $('select[name=catedit_parent]').change(function() {
		 var val = $(this).val();
		 
		 switch(val) {
			 case"1":
			 $('input[name=catedit_tpl]').val('short_shop');
			 break;
			 
			 case"0":
			 $('input[name=catedit_tpl]').val('page');
			 break;
			 }
		 }); 
    });
 </script>