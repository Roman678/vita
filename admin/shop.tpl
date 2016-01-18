<div class="grey title_adm"><center><h4>SHOP</h4></center></div>
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

<div class="span12">
  <form method="get" action="">
    <input type="hidden" name="option" value="shop"/>
    <table>
      <tr><td>
         <div class="input-group">
      <input style="width:300px;" type="text" name="search" class="form-control" placeholder="tag or title">
      <span class="input-group-btn">
        <input class="btn btn-default" type="submit" value="search"/><a class="btn btn-default" href="?option=shop">reset</a>
      </span>
    </div><!-- /input-group -->
      </td></tr>
    </table>
  </form>
</div>

<div class="span12">
 <table class="catlist_table">
 <tr class="green text_center" style="text-transform:uppercase; color:#FFF;"> 
 <td>item</td> 
 <td>article</td> 
 <td>category</td>
 <td>price</td> 
 <td>lang</td>
 <td>manag</td>
 </tr>
 
 {items_list}
 </table>
 
 <div class="container"> 
 <nav>
  <ul class="pagination">
      {shop_pagination}
  </ul>
</nav>
</div>
</div>


