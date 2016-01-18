
<div class="container fullitems">
 <div class="row">
 
  <div class="span12"><center><h3>{fitem_title}</h3></center></div>
  <hr/>
  <br/>
  
  
  <div class="span12">
  
          <div class="span4 inccont fl">
          
          <center><section id="imgfly">{first_img_fitem}</section></center>
          <center>{all_img_fitem}</center>
          </div>
          
          
          <div class="span5">
           {fitem_text}
          
          <hr/>
          <table style="width:100%;">
          <tr>
          <td><span class="label label-danger"><h3>{fitem_price}$</h3></span></td>
          <td>&nbsp;&nbsp;<span data-id="{itemID}" class="addtocart btn" style="border:1px solid #CCC;">Add to Cart</span></td>
          <td><center>share:</center><div class="yashare-auto-init pull-right" data-yashareL10n="ru" data-yashareType="none" data-yashareQuickServices="facebook,twitter,lj,gplus,surfingbird"></div></td>
          </tr>
          </table>
          </div> 
          
          <div class="span3">
            <div class="minibox">
              <div class="minibox_title">WELCOME</div>
              
              <div class="minibox_cont">
                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pharetra, ligula non mollis pretium, lectus libero sodales augue, interdum auctor mauris dui non risus. Nulla facilisi. Nunc rutrum diam in elit sagittis eget viverra erat viverra. Morbi imperdiet aliquet libero vel rhoncus. Integer.</p>
              </div>
            </div>
            
            
            <div class="minibox">
              <div class="minibox_title">Les vendeurs de produits</div>
              
              <div class="minibox_cont">
                  <ul>
                  {vendors_link}
                  </ul>
              </div>
            </div>
            
             <div class="minibox">
              <div class="minibox_title">Types de produits</div>
              
              <div class="minibox_cont">
                 <ul>
                  {types_link}
                  </ul>
              </div>
            </div>
            
          </div>  
   
  </div> 
  
  </div>
</div>

<script type="text/javascript">
	  $(document).ready(function(e) {
		        
				 $('.minibox li a').hover(
				   function() {

					$(this).animate({
						'font-size':18
						},180);
					},
					function() {
					$(this).animate({
						'font-size':16
						},180);
					}
				 );
				 
				 
                $('.inccont img').wrap('<a class="example-image-link" data-lightbox="example-1" href=""></a>');
				 $('.example-image-link').hover(function() {
					 var src = $(this).find('img').attr('src');
					 $(this).attr('href',src);
					 });
			     
				 $('.itemsf').hover(function() {
					
					 var himg = $(this).clone().removeClass('mini_items_img');
					 $('#imgfly').html(himg);
					 });
	  });
    </script>