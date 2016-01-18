<div class="grey title_adm"><center><h4>Редактирование материала</h4></center></div>

 <table class="add_cat_table">
 <form method="post" action="" enctype="multipart/form-data">
 <tr><td>title</td> <td><input type="text" name="editpost_title" value="{editpost_title}" required/></td></tr>
 <tr><td>link (english only)</td> <td><input type="text" name="editpost_link" value="{editpost_link}" required/></td></tr>
 <tr><td>category</td> <td><select name="editpost_cat">{editpost_cat}{parrent_cat}</select></td></tr>
 <tr><td>short publication</td> <td><textarea name="editpost_content">{editpost_content}</textarea></td></tr>
 <tr><td>full publication</td> <td><textarea name="editpost_fullcontent">{editpost_fullcontent}</textarea></td></tr>
 <tr><td>description</td> <td><input type="text" value="{editpost_desc}" name="editpost_desc" /></td></tr>
 <tr><td>keyword</td> <td><input type="text" value="{editpost_keyw}" name="editpost_keyw" /></td></tr>
 <tr><td>language</td> <td><select name="editpost_lang">{editpost_lang}{language_list}</option></select></td></tr>  
 <tr><td></td> <td><input type="submit" name="editpost_sub" value="edit"/></td></tr>
 </form>
 </table>
