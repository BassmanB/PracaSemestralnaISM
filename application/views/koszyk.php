 <style>
.ruler {clear:both; border-bottom:1px solid #cccccc; padding:10px; overflow:auto; display: grid;
        grid-template-columns: auto auto auto auto;
        grid-gap:12px;}
.rulerK {clear:both; border-bottom:1px solid #cccccc; padding:10px; overflow:auto; display: grid;
        grid-template-columns: auto auto auto auto 70px;
        grid-gap:12px;}        
 .rul2 {clear:both;  padding:10px; overflow:auto; display: grid;
        grid-template-columns: 180px  auto;
        grid-gap:12px; width:auto}
               
 .hem1 {border:1px solid #cccccc; border-radius:3px; padding:5px; width:25px; height:25px; padding:4px; font:22px Arial; text-align:center}
 .hem2 {border:1px solid #cccccc; border-radius:3px; padding:5px; width:35px; height:35px; padding:5px; font:22px Arial; text-align:center}
 .butRem {width:18px; height:18px; padding:3px; margin:6px; text-align:center; background-color:#000000;  border:1px solid #777a7b; border-radius:5px; color:#ffffff;}
 .marg10 {margin:10px}
 .hem {font:15px Arial; margin:2px 10px 10px 10px}
 
 .klient {margin:30px 0 10px 0; overflow:auto; padding:5px}
 .but2 {padding:8px 20px 8px 20px; font:16px Arial; border-radius:15px}
  .but1 {padding:8px 20px 8px 20px; font:16px Arial; border-radius:15px}
.kname {width:300px}
.kwota { text-align:right; font:18px Arial; }

</style>

<div class="lewy">


  <h1></h1>



  <?php 
  $licz=0;
  $liczK=0;
  $liczW=0;
  $orderSum=0;

  if(count($koszykProducts)>1){
 
  foreach($koszykProducts as $key){   

    if($key['action']==1){
      ?>
  <?php  if($liczK==0){ ?> <h3>Kupujesz:</h3>
  <div class="rulerK">
    <div class="lewy marg10 kname" >Produkt:</div>
    <div class="cent marg10" style="width:80px">Cena:</div>
    <div class="lewy marg10" style="width:200px">Ilość szt. </div>
    <div class="cent marg10" style="width:130px">Wartość: </div>
    <div class="lewy marg10" >Usuń</div>
  </div>    
  
 <?php $liczK=$liczK+1;  }  ?>
  <div class="rulerK" id="R<?php echo $licz?>">
    <input type="hidden" id="orderK<?php echo $licz; ?>" name="custId" value="<?php echo $key['id']; ?>">
    <div class="lewy marg10 kname" > <?php echo $key['product_name'] ?> </div>
     <div class="pr marg10" style="width:80px"><?php echo $key['price'] ?> zł</div>
    <div class="lewy" style="width:200px">
      
      <button class="subs hem2 lewy" id="<?php echo $licz; ?>" onclick="javascript:subs(<?php echo $licz; ?>)">-</button>
      <div class="hem1 lewy" id="amountK<?php echo $licz;?>" data-value="<?php echo intval($key['order_amount']); ?>"type="number"><?php echo intval($key['order_amount']); ?></div>
      <button class="add hem2 lewy" id="<?php echo $licz; ?>" onclick="javascript:add(<?php echo $licz; ?>)">+</button>
    </div>
    <div class="pr marg10" style="width:130px"><span id="priceK<?php echo $licz;?>"><?php echo $key['price'] * intval($key['order_amount']) ;?></span> zł</div>
    <div class="cent"><div class="butRem cent"  id="<?php echo $licz?>">x</div></div>
  </div>
 
 <?php 
 $licz=$licz+1;

  $orderSum = $orderSum + $key['price'] * intval($key['order_amount']);
  }
} 
?>  

<!--
<?php  foreach($koszykProducts as $key){   

if($liczW==0){
     ?>  <h3 style="color:#075984">Rezerwujesz:</h3>
     <?php $liczW=$liczW+1;
  }

  if($key['action']==0){
  
  ?>
  <div class="rulerK" style="color:#075984" id="R<?php echo $licz?>">
    <input type="hidden" id="orderK<?php echo $licz; ?>" name="custId" value="<?php echo $key['id']; ?>">
    <div class="lewy marg10" > <?php echo $key['product_name'] ?> </div>
    <div class="lewy" style="width:250px">
      <div class="lewy marg10">ilość szt </div>
      <button class="subs hem2 lewy" id="<?php echo $licz; ?>" onclick="javascript:subsZ(<?php echo $licz; ?>)">-</button>
      <div class="hem2 lewy" id="amountZ<?php echo $licz;?>"><?php echo intval($key['order_amount']); ?></div>
      <button class="add hem2 lewy" id="<?php echo $licz; ?>" onclick="javascript:addZ(<?php echo $licz; ?>)">+</button>
    </div>
    <div class="lewy marg10" style="width:130px">cena: <span id="priceZ<?php echo $licz;?>"><?php echo $key['price'] * intval($key['order_amount']) ;?></span> zł</div>
    <div class="butRem lewy" id="<?php echo $licz?>">x</div>
  </div>
  <?php 
    $licz=$licz+1;
  }
  } ?>
 
 -->
 <div class="rulerK">
    <div class="lewy marg10 kname" > </div>
    <div class="cent marg10" style="width:80px"></div>
   <div class="pr kwota" style="width:200px">Razem produkty: </div>
    <div id="sumCost1" class="pr kwota" style="width:130px"><?php echo $orderSum; ?> zł</div>
    <div class="lewy marg10" > </div>
  </div>
 
 
  <div class="cb" style="border-bottom:2px solid #cccccc; ">
    
    <div class="lewy" style="margin:20px">
      <h3>Transport:</h3>
      <input type="radio" name="trans"> Kurier DHL <br />
      <input type="radio" name="trans"> Odbiór osobisty
    </div>
    
  <div class="rulerK">
    <div class="lewy marg10 kname" > </div>
    <div class="cent marg10" style="width:80px"></div>
   <div class="pr kwota" style="width:200px">Transport: </div>
    <div class="pr kwota" style="width:130px">0zł</div>
    <div class="lewy marg10" > </div>

    <div class="lewy marg10 kname" > </div>
    <div class="cent marg10" style="width:80px"></div>
   <div class="pr kwota" style="width:200px">Razem do zapłaty: </div>
    <div class="pr kwota" style="width:130px"> <span id="sumCost"><b>
      <?php echo $orderSum; ?>  
    </b></span> 
    zł
    </div>
  </div>
 
    
  </div>
   
  <div class="lewy bl" style="margin-right:20px">
  <h2> Dane do Faktury </h2>
    <div class="form-grid">
    
    <label for="cname" class="design">Nazwa Firmy</label>
    <input type="text" class="typing" value="">
    <label for="street" class="design">Ulica</label>
    <input type="text" class="typing" id="street" name="street" value="">

    <label for="city" class="design">Miasto</label>
    <input type="text" class="typing" id="city" name="city" value="">

    <label for="phone" class="design">Numer Telefonu</label>
    <input type="text" class="typing" id="phone" name="phone" value="">
    

    <label for="postalCode" class="design">Kod pocztowy</label>
    <input type="text" class="typing" id="postalCode" name="postalCode" value="">
    <label for="cnip" class="design">NIP</label>
    <input type="text" class="typing" value="" >

    <label for="subject" class="design">Uwagi</label>
    <textarea id="subject" name="subject" class="typing" placeholder="" style="height:200px"></textarea>
     <input type="checkbox" id="sendAddress" name="sendAddress" onclick="javascript:addressCheck()" >
     <label for="sendAddress">Wyślij na inny adres</label>
   </div>

  <div class="kwota" >
    <form method="post" action="/index.php/welcome/orderConfirmation/">
      <button onclick="javascript:koszykOrder()" class="but2">Dalej</button>
    </form>
   </div>
 </div>
    <?php  
}else{
  ?>  <h2> Koszyk jest pusty </h2> <?php
}

?>

 
</div>


<script>
  
  function add(id){
  
    var amount =  $("#amountK"+id).text();
    oldAmount = amount;
    amount =parseInt(amount) +1;

    $("#amountK"+id).text(amount);
    var orderId =$("#orderK"+id).val();

    var priceOld = $("#priceK"+id).text();
    
    var price = parseInt(priceOld) * amount/oldAmount;
    var addPrice = parseInt(price) - parseInt(priceOld);
    $("#priceK"+id).text(price);
    var sumPrice = $("#sumCost").text();
    sumPrice = parseInt(sumPrice) + parseInt(addPrice);
    $("#sumCost").text(sumPrice);

     $.ajax({
            type: 'post',
            url: '/index.php/welcome/updateKoszyk/',
            data: {amount: amount, orderId: orderId}
            
        })
  } 

  function subs(id){
    

    var amount =  $("#amountK"+id).text();
    if(amount>1){
    oldAmount = amount;
    amount =parseInt(amount) -1;
    $("#amountK"+id).text(amount);
    var priceOld = $("#priceK"+id).text();

    console.log("cena " + price);
    var price = parseInt(priceOld) * amount/oldAmount;
    $("#priceK"+id).text(price);

    var addPrice = parseInt(priceOld) - parseInt(price);
    var sumPrice = $("#sumCost").text();
    sumPrice = parseInt(sumPrice) - parseInt(addPrice);
    $("#sumCost").text(sumPrice);


    var orderId =$("#orderK"+id).val();
  

     $.ajax({
            type: 'post',
            url: '/index.php/welcome/updateKoszyk/',
            data: {amount: amount, orderId: orderId}
            
        })

    }
    else{
      console.log("za male");
    }
  } 

  function addZ(id){
  
    var amount =  $("#amountZ"+id).text();
    oldAmount = amount;
    amount =parseInt(amount) +1;
    $("#amountZ"+id).text(amount);

    var price = $("#priceZ"+id).text();
    price = parseInt(price) * amount/oldAmount;
    $("#priceZ"+id).text(price);

    var orderId =$("#orderK"+id).val();
    console.log("test " + orderId);

     $.ajax({
            type: 'post',
            url: '/index.php/welcome/updateKoszyk/',
            data: {amount: amount, orderId: orderId}
            
        })
  } 

  function subsZ(id){
    
    var amount =  $("#amountZ"+id).text();
    oldAmount = amount;
    amount =parseInt(amount) -1;
    $("#amountZ"+id).text(amount);
    var price = $("#priceZ"+id).text();
    price = parseInt(price) * amount/oldAmount;
    $("#priceZ"+id).text(price);


    var orderId =$("#orderK"+id).val();

     $.ajax({
            type: 'post',
            url: '/index.php/welcome/updateKoszyk/',
            data: {amount: amount, orderId: orderId}
            
        })
  }


  $(document).on('click','.butRem', function(e){
    e.preventDefault(); 
    id = this.id;
    var orderId= $("#priceK"+id).val();
    var singlePrice =$("#priceK"+id).text();
    var sumPrice = $("#sumCost").text();
    var sumPrice1 = $("#sumCost1").text();
    console.log(sumPrice);
    console.log("single " +singlePrice);
    sumPrice =  parseInt(sumPrice) - parseInt(singlePrice);
    sumPrice1 =  parseInt(sumPrice1) - parseInt(singlePrice);
    console.log("po " +sumPrice);
    $("#sumCost").text(sumPrice);
    $("#sumCost1").text(sumPrice1);

     
    $("#sumCost").text(sumPrice);
    
    $.ajax({
            type: 'post',
            url: '/index.php/welcome/removeFromKoszyk/',
            data: {orderId: orderId},
            success:function (data) {

              $("#R"+id).remove();

            }
            
        })
  })



</script>

