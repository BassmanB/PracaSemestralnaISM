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
               
 .hem1 {border:1px solid #cccccc; border-radius:3px; padding:5px; width:21px; height:21px; padding:4px; font:20px Arial; text-align:center}
 .hem2 {border:1px solid #cccccc; border-radius:3px; padding:5px; width:31px; height:31px; padding:4px; font:20px Arial; text-align:center}
 .butRem {width:18px; height:18px; padding:3px; margin:6px; text-align:center; background-color:#000000;  border:1px solid #777a7b; border-radius:5px; color:#ffffff;}
 .marg10 {margin:10px}
 .hem {font:15px Arial; margin:2px 10px 10px 10px}
 
 .klient {margin:30px 0 10px 0; overflow:auto; padding:5px}
 .but2 {padding:8px 20px 8px 20px; font:16px Arial; border-radius:15px}
  .but1 {padding:8px 20px 8px 20px; font:16px Arial; border-radius:15px}
.kname {width:300px}
.kwota { text-align:right; font:18px Arial; }
</style>
<div id="right"> 
   
<h1 id="title" class="tit"> Wszystkie Produkty </h1>

	<div class="product">
	<?php
	$licz=1;
	foreach($product as $key){

    //echo "Test " .$key['DAB_Wartosc'];
    //$decoded_image=base64_decode($key['DAB_Wartosc']);

	?> 
		<div class="product-img">
			<img id="image<?php echo $licz; ?>" src="<?php echo base_url(); ?>assets/images/<?php echo $key['DAB_NazwaPliku'].".jpg";?>" class="prodImg">
		</div>  

		<div class="product-description">
			Kod: <a id="productName<?php echo $licz; ?>" ><?php echo $key['Twr_Kod']; ?>   </a><br>
			<?php echo $key['Twr_Nazwa']; ?> <br>
			

		</div>
		<div class="product-ammount">
      <?php if($key['TwZ_Ilosc']!=0){
			 echo "dostępna ilość: " ?> <?php echo intval($key['TwZ_Ilosc']); ?><br>
      <?php }else {  ?>
        Magazyn zewnętrzny
        <?php } ?>


		</div>
		<div class="product-value">
          <a id='productPrice<?php echo $licz; ?>'> <?php echo $key['cena'];  ?> </a> zł<br>
    </div>
    <div class="quant">
      <button class="subs hem2 lewy" id="<?php echo $licz; ?>" onclick="javascript:subs(<?php echo $licz; ?>)">-</button>
             <div class="hem1 lewy" id="amountK<?php echo $licz;?>" data-value="" type="number"></div>
             <button class="add hem2 lewy" id="<?php echo $licz; ?>" onclick="javascript:add(<?php echo $licz; ?>)">+</button>
        </div>
        <div class="product-book">
             <form id="koszykForm<?php echo $licz; ?>" method="post" action="/index.php/welcome/koszyk/" class="orderProduct">
             
             <input id="amount<?php echo $licz;?>" type="hidden" name="amount" style="width:40px">
             <input id="kod<?php echo $licz;?>" type="hidden" name="kod" value="<?php echo $key['Twr_Kod'];?>">
             <input id="price<?php echo $licz;?>" type="hidden" name="price" value="<?php echo $key['cena'];?>">
             
             <input id="<?php echo $licz; ?>" class="buttonR koszykOrder" type="submit"  value="zarezerwuj" name="rezerwuj" /> 
             <input id="<?php echo $licz; ?>" class="buttonW koszykOrder" type="submit"  value="wypożycz" name="wypozycz"/> 
             <input id="<?php echo $licz; ?>" class="buttonK koszykOrder" type="submit"  value="kup" name="kupuj"/> 
        </form>

        </div>
<?php $licz = $licz + 1;}; ?>
 </div>
</div>

<script> 

/*
  function form(){
         
          var name = $("#data").text();
          $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/account/',
            data: {userName: name},
            success: function (data) {
              if(data){
                $(".product").remove();
                $("#title").after(data); 
             }
            }
          });
        };
*/
        

		function formZamowienia(){

			var userName = $("#data").text();

			$.ajax({
            type: 'post',
            url: '/index.php/welcome/account',
            data: {userName: userName},
            success: function (data) {
				
				$(".product").remove();
				$("#title").after(data);
			}
		})
		}
/*
        $('#myForm').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/login/',
            data: $('#myForm').serialize(),
            success: function (data) {
            	if(data){
            	var text1 = '<button id="logout" class="but3" style="padding:2px 10px; margin-left:20px">logout</button>';
                var text2 = '<a href="/4hifi/index.php/welcome/ordersAdministration/" class="menuG"> Kontrola zamówień </a>';
            	var data1 = '<a id="data">' + data + '</a>';
                var hiddenInput = '<input type="hidden" name="user" value="'+data+'">';
            	$("#myForm").remove();
                $(".orderProduct").prepend(hiddenInput);
            	$(".right").after(data1, text1);
            	}else
                    alert("invalid username or password");
            
                if(data =='jgrzybicki@interprojekt.pl'){
                    $(".right").after(text2);
                }         
                }
            	
          });
        });
*/
        function ordersAdministration(){

            $.ajax({
            type: 'post',
            url: '/index.php/welcome/ordersAdministration/',
            data: $('#myForm').serialize(),
            success:function(data){
                $(".product").remove();

                var x = "";
                for(i in data){
                    x = x + "<div id='order"+i+"'>Numer Zamówienia: <a id='orderNr"+i+"'> "+data[i].id+"</a> Uzytkownik: " + data[i].name + " data zamówienia: " + data[i].date + " Ilość: " + data[i].order_ammount + "<a id='address"+i+"'> address id: "+data[i].id_address+"</a><button class='orderAdmin' type='button' id='"+i+"'>zobacz zamówienie </button> <button type='button' onclick='javascript:acceptOrder();'>akceptuj zamówienie</button></div>  <br>" ; 
                }
                $("#title").after(x);
            },
            dataType: "json"
          })
        }

 function add(id){
  
    var amount =  $("#amountK"+id).text();
    if(amount==""){
      amount =1;
    }else{
      amount = parseInt(amount) + 1;
    }

    $("#amountK"+id).text(amount);
    $("#amount"+id).val(parseInt(amount));
  } 

  function subs(id){
    

    var amount =  $("#amountK"+id).text();
    if(amount==""){
      amount =1;
    }else if(amount>1){
      amount = parseInt(amount) -1;
    }else{
      console.log("proba obnizenia ponizej zera");
    }

    $("#amountK"+id).text(amount);
    $("#amount"+id).val(parseInt(amount));
  
  } 
   
		 


     	
 </script>
