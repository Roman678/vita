<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>smart</title>
    <link rel="stylesheet" type="text/css" href="css/general.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<script type="text/javascript" src="js/jq.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.7.2.custom.min.js"></script>
    <script type="text/javascript" src="js/jquery.flip.js"></script>
    <script type="text/javascript" src="tinymce/tinymce.min.js"></script>
    
    <script type='text/javascript'>
	   tinymce.init({
           selector: "textarea",
           relative_urls : false,
		   height : 400,
		   width : 1000,
		   plugins: [
		"jbimages","advlist autolink lists link image charmap preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],

    toolbar: "jbimages insertfile textcolor | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link "
	   });
	 
	$('textarea img').attr('width','180'); 
	   
	$(document).ready(function() {
        $('.slideblock').click(function() {
			$('.hideblock').slideDown();
			});
    });
	</script>

</head>
<body>


<div class="container-fluid">
   <div class="row">
     <div class="col-md-12">    
        <div class="admintop">
          <img src="images/logo.png" alt=""/>
          
          <div class="admintop_r">
           <a id="get_site" target="_blank" href="{site}">go to site</a>
           <a id="link_options" href="{host}/?option=options"><img src="images/btn_options.png" alt/></a>
           <a id="logout" class="trans" href="{host}/?action=logout">EXIT</a>
          </div>
        </div>
      </div>
   </div>
</div>


<div class="container-fluid">
   <div class="row">
     <div class="col-md-12">
        <div class="adminmenu">
          <div class="container center">
              <ul>
                <li><a class="trans" href="{host}/?option=publication">PUBLICATION</a></li>
                <li><a class="trans" href="{host}/?option=category">CATEGORIES</a></li>
                <li><a class="trans" href="{host}/?option=application">APPLICATIONS</a></li>
                
              </ul>
          </div>
        </div>
      </div>
   </div>
</div>

<div class="container">
   <div class="row">
     <div class="col-md-12">
       
       <div class="admincontent">
          {admincontent}
       </div>
       
     </div>
   </div>
</div>
<script type="text/javascript" src="js/multiple.js"></script>
</body>
</html>