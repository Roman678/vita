<style>
  .thumb {
    height: 75px;
    border: 1px solid #000;
    margin: 10px 5px 0 0;
  }
</style>
<div class="grey title_adm"><center><h4>MANAGER ITEMS</h4></center></div>
<br/>
<div class="btn-group btn-group-justified" role="group" aria-label="...">
  <div class="btn-group" role="group">
    <a href="?option=items"><button type="button" class="btn btn-default">ADD ITEMS</button></a>
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
     <tr><td>title</td> <td><input type="text" name="additem_title" placeholder="Chardonnay Wine Glasses" required/></td></tr>
     <tr><td>link (english only)</td> <td><input type="text" name="additem_link" placeholder="" required/></td></tr>
     <tr><td>article</td> <td><input type="text" name="additem_code" placeholder="" required/></td></tr>
     <tr><td>category</td> <td><select name="additem_cat">{parrent_cat}</select></td></tr>
     <tr><td>text publicat.</td> <td><textarea name="additem_text"></textarea></td><td></td></tr>
     <tr><td>price</td> <td><input type="text" name="additem_price" placeholder="00.00" required/></td><td></td></tr>
     <tr><td>Load<p> images</p></td> <td><input type="file" id="files" name="files[]" multiple/><output id="list"></output></td></tr>
     <tr><td>tag (<i>for search</i>)</td> <td><input type="text" name="additem_tags" placeholder="white wine" required/></td></tr>
     
     <tr><td>description</td> <td><input placeholder="" type="text" name="additem_desc" /></td></tr>
     <tr><td>keyword</td> <td><input type="text" placeholder="" name="additem_keyw" /></td></tr>
     <tr><td>language</td> <td><select name="additem_lang">{language_list}</option></select></td></tr> 
     <tr><td>show at homapage</td> <td><input type="checkbox" name="additem_viewhome"/></td></tr>
     <tr><td>isset</td> <td><input type="checkbox" name="additem_isset" checked/></td></tr> 
     <tr><td></td> <td><input type="submit" name="additem_sub" value="добавить"/></td></tr>
  </form>
  </table>
</div>

<script type="text/javascript">
  $('input[name=additem_title]').keyup(function() {
	  var title = $(this).val();
	  for(i=1;i<=15;i++) {
		  title = title.replace(' ','_');
		  }
	  
	  $('input[name=additem_link]').val(title);
	  });
</script>