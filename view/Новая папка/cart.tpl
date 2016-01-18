<div class="container animated zoomIn" id="cart">
  <div class="span12">
  Cart count <span class="badge spflprice">{count_products}</span> items  
  
   

    <hr/>
    <table class="inccont ctable">
    <tr>
    <td>image</td> 
    <td>product</td> 
    <td>price</td> 
    <td>tax 8%</td> 
    <td>full_price</td> 
    <td>count</td> 
    <td></td>
    </tr>
    <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
    {product_list}
    <tr>
    <td></td> 
    <td></td> 
    <td></td> 
    <td></td> 
    <td>total&nbsp;<span style="background-color:red;" class="badge">{full_price}&nbsp;&nbsp;CHF</span></td> 
    <td></td> 
    <td><input type="submit" value="Buy Now"></td>
    </tr>
    <input type="hidden" name="cmd" value="_xclick">
    <input type="hidden" name="business" value="midu081090@him-mail.ch">
    <input type="hidden" name="item_name" value="{item_name}">
    <input type="hidden" name="item_number" value="{item_number}">
    <input type="hidden" name="amount" value="{full_price}">

    <input type="hidden" name="currency_code" value="CHF"/>
    
    <input type="hidden" name="no_shipping" value="0">

</form>

    </table>
    
   
    </form> 
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(e) {
    

  var countitems = $('.spflprice').html();
  if(countitems == 0) {
	  $('.ctable').hide();
	  } else {
	  $('.ctable').show();
		  }

});
</script>



