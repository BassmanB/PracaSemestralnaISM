 $(document).on('click', '.editOrder', function (e) {

            var id = this.id;
            console.log("Witamy w edycji: "+ id);

            var htmlText = '<div class="container"><form action="/4hifi/index.php/welcome/editForm/" method="post"><label for="street">Ulica</label><input type="text" id="streetE" name="street" placeholder="Your name.."><label for="city">Miasto</label><input type="text" id="cityE" name="city" placeholder="Your last name.."><label for="postalCode">Kod pocztowy</label><input type="text" id="postalCodeE" name="postalCode" placeholder="Your last name.."><label for="nip">Nip</label><input type="text" id="nipE" name="street" placeholder="nipE"><input type="text" id="priceE" name="price" placeholder="nowa cena"><button class="formToEdit" id="'+id+'" placeholder="Zmień Dane"></button></form></div>';

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
        
         $(document).on('click', '.orderAdmin', function(e){ 
            e.preventDefault();
           
            var orderNr = $('#orderNr'+this.id).text();
            orderNr = orderNr.trim();
            var id = this.id;
            console.log('test ' + orderNr);
            $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/seeOrderAdmin/',
            data: {orderNr: orderNr},
            success: function (data) {

                var x = "<div id='toEdit"+orderNr.trim()+"' >Ulica: "+data[0].ulica+" Miasto: "+data[0].miasto+" Kod Pocztowy: "+data[0].kod_pocztowy+" Nip: "+data[0].nip+" <button class='editOrder' id="+orderNr+">Edytuj zamówienie</button></div>";
                $('#order'+ id).after(x);
                console.log(x);
          },
          dataType: "json"
        });

        });

	 $(document).on('click', '.editOrder', function (e) {

            var id = this.id;
            console.log("Witamy w edycji: "+ id);

            var htmlText = '<div class="container"><form action="/4hifi/index.php/welcome/editForm/" method="post"><label for="street">Ulica</label><input type="text" id="streetE" name="street" placeholder="Your name.."><label for="city">Miasto</label><input type="text" id="cityE" name="city" placeholder="Your last name.."><label for="postalCode">Kod pocztowy</label><input type="text" id="postalCodeE" name="postalCode" placeholder="Your last name.."><label for="nip">Nip</label><input type="text" id="nipE" name="street" placeholder="nipE"><input type="text" id="priceE" name="price" placeholder="nowa cena"><button class="formToEdit" id="'+id+'" placeholder="Zmień Dane"></button></form></div>';

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
        
        
   $( document ).ready(function() {
      var lol = window.opener.$("#data").text();
      console.log(lol);
    });

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
	
	