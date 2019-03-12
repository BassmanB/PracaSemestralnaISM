<style>
.editOrder, .orderAdmin { padding:4px 20px; margin:10px; color:#ffffff; font: 15px Arial}
.prodRes {clear:both; padding:15px; overflow:auto}
.status{ float:left; padding:4px; margin:10px; font: bold 15px Arial; background-color:#ffffff;  border:2px solid #04d47a; border-radius:10px;  color:#04d47a;  width:120px; text-align:center}
.status1{ float:left; padding:4px; margin:10px; font:bold 16px Arial; background-color:#ffffff;  border:2px solid #e2000f; border-radius:10px;  color:#e2000f;  width:120px; text-align:center}
.prodResName {float:left; width:250px; padding:10px; border-bottom:2px solid #cccccc;}
.prodResQuant {float:left; width:100px; text-align:right; padding:10px; border-bottom:2px solid #cccccc;}
.prodResPrice {float:left; width:150px; text-align:right; padding:10px; border-bottom:2px solid #cccccc}
.resKlient {clear:both; padding:15px; margin:10px 0 10px 0}

.nrZam {float:left; width:50px; padding:13px; text-align:right}
.dataZam {float:left; width:120px;  padding:13px}
.uzyt {float:left; width:300px;  padding:13px}
.listaZam {clear:both; padding:15px 0; border-top:1px solid #cccccc; margin-top:10px; vertical-align:middle; overflow:auto}
.kol {background-color:#e4e3e3}

.ruler {clear:both; border-bottom:1px solid #ffffff; padding:10px; overflow:auto; display: grid;
        grid-template-columns: auto auto auto auto;
        grid-gap:12px;}
 .rul2 {clear:both;  padding:10px; overflow:auto; display: grid;
        grid-template-columns: 180px  auto;
        grid-gap:12px; width:auto}
               
 .hem2 {border:1px solid #cccccc; border-radius:3px; padding:5px; width:25px; height:25px; padding:5px; font:24px Arial; text-align:center}
 .marg10 {margin:10px}
 .hem {font:15px Arial; margin:2px 10px 10px 10px}
 .klient {margin:30px 0 10px 0; overflow:auto; padding:5px; width:300px}
 .but2 {padding:5px 15px 5px 15px; font:16px Arial; border-radius:15px}
 .ico {vertical-align:middle; margin-right:10px; float:left}
 .cb {clear:both; overflow:auto; padding:5px}
 h3 {font:bold 14px Arial}
 p {font:13px Arial; margin:5px}
.szer {width:200px}
.exp {border-bottom:2px solid #000000; border-right:0; color:#000000; background-color:#ffffff; border-top:0; border-left:0; padding:10px}

</style>


<div class="lewy">
  <h1></h1>


  <div>
    <div class="nrZam">Nr: </div>
    <div class="dataZam">Data:</div>
    <div class="uzyt">Rodzaj transakcji:</div>
    <div class="lewy" style="width:120px; text-align:center">Status</div>
  </div>

  <?php 
  $licz = 0;
  function unique_multidim_array($array, $key) {    
    $temp_array = array(); 
    $i = 0; 
    $key_array = array(); 
    
    foreach($array as $val) { 
        if (!in_array($val[$key], $key_array)) { 
            $key_array[$i] = $val[$key]; 
            $temp_array[$i] = $val; 
        } 
        $i++; 
    } 
    return $temp_array; 
  } 

$orders = unique_multidim_array($orders, 'order_id');
foreach($orders as $key){
    ?> 
  <div class="listaZam" id="order<?php echo $licz; ?>">
    <div class="nrZam" id='orderNr<?php echo $licz; ?>'><?php echo $key['order_id']; ?></div>
    <div class="dataZam"><?php echo $key['date']; ?></div>
    <div class="uzyt"><?php if($key['action']==0){
      ?> Rezerwacja <?php 
    }elseif ($key['action']==1) {
       ?> Zakup <?php
    }elseif ($key['action']==2) {
       ?> Wypożyczenie <?php
    }; ?></div>
    <?php
    if($key['adminConfirmed']==1){ ?> 
    <div class="status">Potwierdzone</div>

<?php }else{
    ?>
    <div id="status<?php echo $key['id']?>" class="status1">Niepotwierdzone </div>
  <?php } 
  ?>

    <button class='exp' type='button' id='<?php echo $licz ?>'>Zobacz szczegóły &or;</button> 
  </div>
<?php 
$licz = $licz + 1;
} ?> 

</div>

<script>
    $(document).on('click', '.editOrder', function (e) {

            var id = this.id;
            console.log("Witamy w edycji: "+ id);

            var htmlText = '<div class="container"><form action="/4hifi/index.php/welcome/editForm/" method="post"><label for="street">Ulica</label><input type="text" id="streetE" name="street" placeholder="Your name.."><label for="city">Miasto</label><input type="text" id="cityE" name="city" placeholder="Your last name.."><label for="postalCode">Kod pocztowy</label><input type="text" id="postalCodeE" name="postalCode" placeholder="Your last name.."><label for="nip">Nip</label><input type="text" id="nipE" name="street" placeholder="nipE"><input type="text" id="priceE" name="price" placeholder="nowa cena"><button class="formToEdit" id="'+id+'" placeholder="ZmieA„ Dane"></button></form></div>';

            $('#toEdit'+id).after(htmlText);
        })

       $(document).on('click', '.formToEdit', function (e) {
            e.preventDefault();
            var id = this.id;
            var street = $('#streetE').val();
            var city = $('#cityE').val();
            var postalCode = $('#postalCodeE').val();
            var nip = $('#nipE').val();

            console.log(id + " ulica: " + street);

            $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/editForm/',
            data:   {id: id, streetE: street, cityE: city, postalCodeE: postalCode, nipE: nip},
            success: function (data) {
                console.log(data);
            },
            dataType:"json"
          })
        })
        
        //Ta funkcja wA‚Ä…cza siÄ™ po naciA›niÄ™ciu przycisku "zobacz zamA3wienie" np. zamA3wienie nr 39.
         $(document).on('click', '.exp', function(e){ 
            e.preventDefault();
           
            var orderNr = $('#orderNr'+this.id).text();
            orderNr = orderNr.trim();
            var id = this.id;
            console.log("test " + orderNr);

            if(!$("#toogleCheck"+id).hasClass("ruler")){
            $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/seeOrderUser/',
            data: {orderNr: orderNr},
            success: function (data) {
              var test = '';

                console.log("test2 " + data.length);
                for(var i=0; i<data.length; i++){

                  test = test +'<div><div class="lewy marg10" >'+   data[i].product_name  +'</div> \n'+
                              '<div class="lewy marg10">ilość szt. '+data[i].order_amount+'</div>   \n'+
                              '<div class="lewy marg10"  style="width:130px">cena: '+data[i].price*data[i].order_amount+' zł</div></div>';
                }
                test='<div class="toToogle'+id+'">'+test+'</div>';
              

                $('#order'+ id).after(test);
          },
          dataType: "json"
        });
        }else{
          $(".toToogle"+id).toggle();
        }
        });

         function test(){
          console.log("super test!");
         }

         //ta funkcja wA‚Ä…cza siÄ™ po naciA›niÄ™ciu przycisku "edytuj zamA3wienie".
     $(document).on('click', '.editOrder', function (e) {

            var id = this.id;
            console.log("Witamy w edycji: "+ id);

            var htmlText = '<div class="container"><form action="/4hifi/index.php/welcome/editForm/" method="post"><label for="street">Ulica</label><input type="text" id="streetE" name="street" placeholder="Your name.."><label for="city">Miasto</label><input type="text" id="cityE" name="city" placeholder="Your last name.."><label for="postalCode">Kod pocztowy</label><input type="text" id="postalCodeE" name="postalCode" placeholder="Your last name.."><label for="nip">Nip</label><input type="text" id="nipE" name="street" placeholder="nipE"><input type="text" id="priceE" name="price" placeholder="nowa cena"><button class="formToEdit" id="'+id+'" placeholder="ZmieA„ Dane"></button></form></div>';

            $('#toEdit'+id).after(htmlText);
        })

       $(document).on('click', '.formToEdit', function (e) {
            e.preventDefault();
            var id = this.id;
            var addressId = $('#adresId'+id).text();
            var street = $('#streetE').val();
            var city = $('#cityE').val();
            var postalCode = $('#postalCodeE').val();
            var price = $('#priceE').val();
            var nip = $('#nipE').val();

            console.log("ID: " + id + "address ID " + addressId + " ulica: " + street);

            $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/editForm/',
            data:   {idA: addressId, idO: id, streetE: street, cityE: city, postalCodeE: postalCode, nipE: nip, priceE: price},
            success: function (data) {
                console.log(data);
            },
            dataType:"json"
          })
        })
        

   $('#address').on('submit', function (e) {

    var lol = window.opener.$("#data").text();
    console.log(lol);

          e.preventDefault();
          $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/address/',
            data: $('#address').serialize(),
            success: function (data) {
              if(data){
                console.log(data);      
            }
            }
    });
});
   function zatwierdz(id){

    $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/orderAccept/',
            data: {id: id},
            success: function (data) {
            
             $('#status'+id).replaceWith('<div class="status">Potwierdzone</div>');  
            }
    });
  }
    
   </script>          