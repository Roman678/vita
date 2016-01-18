 <div class="grey title_adm"><center><h4>MANAGER CATEGORIES</h4></center></div>
 
 <table class="add_cat_table">
 <form method="post" action="">
 <tr><td>title</td> <td><input type="text" name="addcat_title" placeholder="exemple: my blog" required/></td></tr>
 <tr><td>link <i>english only</i></td> <td><input type="text" placeholder="exemple: blog" name="addcat_link" required/></td></tr>
 <tr><td>category for .....</td> <td><select name="addcat_parent"><option value="0">publication</option><option value="1">shop</option></select></td></tr>
 <tr><td>parrent category</td> <td><select name="addcat_parentcat"><option value="0">none category</option>{parrent_cat}</select></td></tr>
 <tr><td>template file</td> <td><input type="text" name="addcat_tpl" value="page" required/></td></tr>
 <tr><td>description</td> <td><input placeholder="" type="text" name="addcat_desc" /></td></tr>
 <tr><td>keyword</td> <td><input type="text" placeholder="" name="addcat_keyw" /></td></tr>
 <tr><td>language</td> <td><select name="addcat_lang">{language_list}</option></select></td></tr> 
 <tr><td></td> <td><input type="submit" name="addcat_sub" value="add"/></td></tr>
 </form>
 </table>



 <table class="catlist_table">
 <tr class="green text_center" style="text-transform:uppercase; color:#FFF;">
 <td>type</td> 
 <td>link</td> 
 <td>title</td> 
 <td>template</td> 
 <td>description</td> 
 <td>lang</td>
 <td>edit</td>
 </tr>
 
 {category_list}
 </table>
 
 <script type="text/javascript">
   $(document).ready(function(e) {
     $('select[name=addcat_parent]').change(function() {
		 var val = $(this).val();
		 
		 switch(val) {
			 case"1":
			 $('input[name=addcat_tpl]').val('short_shop');
			 break;
			 
			 case"0":
			 $('input[name=addcat_tpl]').val('page');
			 break;
			 }
		 }); 
    });
 </script>