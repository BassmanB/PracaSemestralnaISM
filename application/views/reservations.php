 <style>
.ruler {clear:both; border-bottom:1px solid #cccccc; padding:10px; overflow:auto; display: grid;
        grid-template-columns: auto auto auto auto;
        grid-gap:12px;}
.rulerK {clear:both; border-bottom:1px solid #cccccc; padding:10px; overflow:auto; display: grid;
        grid-template-columns: auto auto auto auto auto;
        grid-gap:12px;}        
 .rul2 {clear:both;  padding:10px; overflow:auto; display: grid;
        grid-template-columns: 180px  auto;
        grid-gap:12px; width:auto}
               
 .hem2 {border:1px solid #cccccc; border-radius:3px; padding:5px; width:25px; height:25px; padding:5px; font:24px Arial; text-align:center}
 .butRem {width:18px; height:18px; padding:3px; margin:6px; text-align:center; background-color:#000000;  border:1px solid #777a7b; border-radius:5px; color:#ffffff;}
 .marg10 {margin:10px}
 .hem {font:15px Arial; margin:2px 10px 10px 10px}
 .klient {margin:30px 0 10px 0; overflow:auto; padding:5px}
 .but2 {padding:8px 20px 8px 20px; font:16px Arial; border-radius:15px}
  .but1 {padding:8px 20px 8px 20px; font:16px Arial; border-radius:15px}

</style>

<div class="lewy">


  <h1></h1>



  <?php 
  $licz=0;
  $liczW=0;

 foreach($koszykProducts as $key){   

if($liczW==0){
     ?>  <h3 style="color:#075984">Rezerwujesz: </h3>
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

 	<form method="post" action="/index.php/welcome/order/">
 		<button onclick="javascript:koszykOrder()">Rezerwuj</button>
 	</form>
</div>


<script>
	
	function add(id){
	
		var amount =  $("#amountK"+id).text();
    oldAmount = amount;
		amount =parseInt(amount) +1;

		$("#amountK"+id).text(amount);
		var orderId =$("#orderK"+id).val();

    var price = $("#priceK"+id).text();
    console.log("cena " + price);
    price = parseInt(price) * amount/oldAmount;
    $("#priceK"+id).text(price);

		 $.ajax({
            type: 'post',
            url: '/index.php/welcome/updateKoszyk/',
            data: {amount: amount, orderId: orderId}
            
        })
	}	

	function subs(id){
		
		var amount =  $("#amountK"+id).text();
    oldAmount = amount;
		amount =parseInt(amount) -1;
		$("#amountK"+id).text(amount);
    var price = $("#priceK"+id).text();
    console.log("cena " + price);
    price = parseInt(price) * amount/oldAmount;
    $("#priceK"+id).text(price);

		var orderId =$("#orderK"+id).val();

		 $.ajax({
            type: 'post',
            url: '/index.php/welcome/updateKoszyk/',
            data: {amount: amount, orderId: orderId}
            
        })
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
    var orderId =$("#orderK"+id).val();
    
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

