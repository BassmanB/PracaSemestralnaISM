<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<div>

  <form action="/4hifi/index.php/welcome/address/" method="post" id="address">
    <h2> Dane do Faktury </h2>
    <div class="form-grid">
    
    <label for="cname" class="design">Nazwa Firmy</label>
	<input type="text" class="typing" value="<?php echo $kontrahent[0]['Knt_Nazwa1'];   ?>">
    <label for="street" class="design">Ulica</label>
    <input type="text" class="typing" id="street" name="street" value="<?php echo $kontrahent[0]['Knt_Ulica'];   ?>">

    <label for="city" class="design">Miasto</label>
    <input type="text" class="typing" id="city" name="city" value="<?php echo $kontrahent[0]['Knt_Miasto'];   ?>">

    <label for="phone" class="design">Numer Telefonu</label>
    <input type="text" class="typing" id="phone" name="phone" value="<?php echo $kontrahent[0]['Knt_Telefon1'];   ?>">
    

    <label for="postalCode" class="design">Kod pocztowy</label>
    <input type="text" class="typing" id="postalCode" name="postalCode" value="<?php echo $kontrahent[0]['Knt_KodPocztowy'];   ?>">
    <label for="cnip" class="design">NIP</label>
    <input type="text" class="typing" value="<?php echo $kontrahent[0]['Knt_Nip']; ?>" >

    <label for="subject" class="design">Uwagi</label>
    <textarea id="subject" name="subject" class="typing" placeholder="Write something.." style="height:200px"></textarea>
     <input type="checkbox" id="sendAddress" name="sendAddress" onclick="javascript:addressCheck()" >
     <label for="sendAddress">Wyślij na inny adres</label>
     
     
   
	</div>
    <input type="submit" value="Submit">
  </form>

</div>

<script>
    function addressCheck(){
        if($("#toToggle").hasClass("toggle")==true){
             $("#toToggle").toggle();
             console.log("ma ta klase");
        }else{
          var form =  '<div id="toToggle" class="toggle" > \n'+
                    '<label for="f_street" class="design">Ulica</label> \n '+
                    '<input type="text" class="typing" id="f_street" name="f_street" placeholder="Your name.."> \n'+
                    '<label for="f_city" class="design">Miasto</label> \n'+
                    '<input type="text" class="typing" id="f_city" name="f_city" placeholder="Your last name..">\n'+
                    '<label for="f_postalCode" class="design">Kod pocztowy</label> \n'+
                    '<input type="text" class="typing" id="f_postalCode" name="f_postalCode" placeholder="Your last name..">\n'+
                    '</div>';
        $("#sendAddress").after(form);
        }
    }

    $('#address').on('submit', function (e) {

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
</script>


