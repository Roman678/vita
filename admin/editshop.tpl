<style>
  .thumb {
    height: 75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }
</style>
<div class="grey title_adm"><center><h4>EDIT ITEM</h4></center></div>
<br/>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <a href="?option=items"><button type="button" class="btn btn-default">ADD ITEM</button></a>
  </div>
  <div class="btn-group" role="group">
    <a href="?option=shoped"><button type="button" class="btn btn-default">SHOPPING</button></a>
  </div>
  <div class="btn-group" role="group">
    <a href="?option=stat"><button type="button" class="btn btn-default">STATISTICS</button></a>
  </div>
</div>

<br/>

<div class="span12 greybl">
  <table class="add_cat_table">
  <form method="post" action="" enctype="multipart/form-data">
     <tr><td>title</td> <td><input type="text" value="{itm_edit_title}" name="edititem_title" placeholder="Chardonnay Wine Glasses" required/></td></tr>
     <tr><td>article</td> <td><input type="text" value="{itm_edit_code}" name="edititem_code" placeholder="" required/></td></tr>
     <tr><td>link (english only)</td> <td><input type="text" value="{itm_edit_link}" name="edititem_link" placeholder="Chardonnay Wine Glasses" required/></td></tr>
     <tr><td>category</td> <td><select name="edititem_cat">{parrent_cat}</select></td></tr>
     <tr><td>comment for item</td> <td><textarea name="edititem_text">{itm_edit_text}</textarea></td><td></td></tr>
     <tr><td>price</td> <td><input type="text" value="{itm_edit_price}" name="edititem_price" placeholder="00.00" required/></td><td></td></tr>
     <tr><td>Load<p> images</p></td> <td><input type="file" id="files" name="files[]" multiple/><output id="list"></output></td></tr>
     <tr><td>tag (<i>for search</i>)</td> <td><input type="text" value="{itm_edit_tags}" name="edititem_tags" placeholder="белые вина" required/></td></tr>
     
     <tr><td>description</td> <td><input placeholder="" value="{itm_edit_desc}" type="text" name="edititem_desc" /></td></tr>
     <tr><td>keyword</td> <td><input type="text" value="{itm_edit_keyw}" placeholder="" name="edititem_keyw" /></td></tr>
     <tr><td>language</td> <td><select name="edititem_lang">{language_list}</option></select></td></tr> 
     <tr><td>show at homepage</td> <td><input type="checkbox" name="edititem_viewhome" {itm_edit_homechecked}/></td></tr>
     <tr><td>isset</td> <td><input type="checkbox" name="edititem_isset" {itm_edit_issetchecked}/></td></tr> 
     <tr><td></td> <td><input type="submit" name="edititem_sub" value="edit"/></td></tr>
  </form>
  </table>
</div>
<script type="text/javascript">
  $('input[name=edititem_title]').keyup(function() {
	  var title = $(this).val();
	  for(i=1;i<=15;i++) {
		  title = title.replace(' ','_');
		  }
	  
	  $('input[name=edititem_link]').val(title);
	  });
</script>
