<div class="grey title_adm"><center><h4>MANAGER PUBLICATIONS</h4></center></div>
<button class="btn slideblock"><img height="30" src="images/64/64Px - 125.png"/>add</button>
 <div class="hideblock">
 <table class="add_cat_table">
 <form method="post" action="" enctype="multipart/form-data">
 <tr><td>title</td> <td><input type="text" name="addpost_title" required/></td></tr>
 <tr><td>link (english only)</td> <td><input type="text" name="addpost_link" required/></td></tr>
 <tr><td>category</td> <td><select name="addpost_cat">{parrent_cat}</select></td></tr>
 <tr><td>short publication</td> <td><textarea class="mce" name="addpost_content"></textarea></td></tr>
 <tr><td>full publication</td> <td><textarea class="mce" name="addpost_fullcontent"></textarea></td></tr>
 <tr><td>description</td> <td><input type="text" name="addpost_desc" /></td></tr>
 <tr><td>keyword</td> <td><input type="text" name="addpost_keyw" /></td></tr>
 <tr><td>language</td> <td><select name="addpost_lang">{language_list}</option></select></td></tr>  
 <tr><td></td> <td><input type="submit" name="addpost_sub" value="add"/></td></tr>
 </form>
 </table>
 </div>


 <table class="catlist_table">
 <tr class="green text_center" style="text-transform:uppercase; color:#FFF;"> 
 <td>id</td> 
 <td>category</td> 
 <td>title</td>
 <td>lang</td> 
 <td>edit</td>
 </tr>
 
 
 {publication_list}
 </table>
<div class="container"> 
 <nav>
  <ul class="pagination">
      {publication_pagination}
  </ul>
</nav>
</div>
 
 <script type="text/javascript">
     $('input[name=addpost_title]').keyup(function() {
	  var title = $(this).val();
	  for(i=1;i<=15;i++) {
		  title = title.replace(' ','_');
		  }
	  
	  $('input[name=addpost_link]').val(title);
	  });
	  
    var input = document.getElementById('filesToUpload');
    var list = document.getElementById('fileList');

    while (list.hasChildNodes()) {
	list.removeChild(ul.firstChild);
    }

    for (var x = 0; x < input.files.length; x++) {

	var li = document.createElement('li');
	li.innerHTML = 'File ' + (x + 1) + ':  ' + input.files[x].name;
	list.append(li);
    }


 
</script>
 