

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

        $('#address').on('submit', function (e) {

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

		function formZamowienia(){

			var userName = $("#data").text();

			$.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/account',
            data: {userName: userName},
            success: function (data) {
				
				$(".product").remove();
				$("#title").after(data);
			}
		})
		}

        $('#myForm').on('submit', function (e) {
          e.preventDefault();
          $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/login/',
            data: $('#myForm').serialize(),
            success: function (data) {
            	if(data){
            	var text1 = '<button id="logout" style="background-color:#ffffff;  border:1px solid #777a7b; border-radius:5px; padding:4px 20px; margin:10px; color:#e2000f; font: 15px Arial">logout</button>';
                var text2 = '<a href="/4hifi/index.php/welcome/ordersAdministration/" style="color:#ffffff"> Kontrola zamówień </a>';
            	var data1 = '<a id="data">' + data + '</a>';
                var hiddenInput = '<input type="hidden" name="user" value="'+data+'">';
            	$("#myForm").remove();
                $(".orderProduct").prepend(hiddenInput);
            	$(".right").after(data1, text1);
            	}else
                    alert("invalid username or password");
            
                if(data =='Janek'){
                    $(".right").after(text2);
                }         
                }
            	
          });
        });


        function ordersAdministration(){

            $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/ordersAdministration/',
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

        

        function acceptOrder(){
            console.log("nigga");
        }

        $(document).on('click', '#subm2', function (e) {

          e.preventDefault();
          $.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/search/',
            data: $('#myForm2').serialize(),
            success: function (data) {
            	var x ="<div class='product-img'><img src='./assets/images/audioGD.jpg'></div><div class='products-description'>" + data[0].Twr_Kod+data[0].Twr_Opis +data[0].Twr_Nazwa+data[0].TwZ_Wartosc + "</div></div>"; 
            	$(".product").remove();
            	$("#title").after("<div class='products' >" + x + "</div>");
          },
          dataType: "json"

        });
		});
		
     	$(document).on('click','#logout', function(e){
     		e.preventDefault();
     		var text = '<form method="post" action="/4hifi/index.php/welcome/login/" id="myForm"> <input type="text" id="username" name="username" placeholder="username"> <input type="text" id="password" name="password" placeholder="password"><input id="subm" type="submit" name="submit" value="submit"></form>';
     	$("#logout").remove();
     	$("#data").remove();
     	$(".right").after(text);

		});

        /**
     	$(document).on('click','.buttonBuy', function(e){
            

     		e.preventDefault();
     		var id = this.id;
     		console.log(id);
     		var idStrLength = id.length;
     		var lastchar = id.charAt(idStrLength - 1);
     		var username=$("#data").text();
     		var productName=$('#productName'+lastchar).text();
            var price=$("#productPrice"+lastchar).text();
     		console.log("cena cena cena " + price + "user user user " + productName);
     		var test=String($('#reservation'+lastchar).serialize())+','+String(username)+','+String(productName)+','+String(price);
     		console.log(test);
            var text = '<div class="container"><form action="/4hifi/index.php/welcome/address/" method="post" id="address"><label for="cname">Nazwa Firmy</label><label for="street">Ulica</label><input type="text" id="street" name="street" placeholder="Your name.."><label for="city">Miasto</label><input type="text" id="city" name="city" placeholder="Your last name.."><label for="postalCode">Kod pocztowy</label><input type="text" id="postalCode" name="postalCode" placeholder="Your last name.."><label for="subject">Uwagi</label><textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><label for="f_cname">Nazwa Firmy</label><input type="text" id="f_cname" name="f_cname" placeholder="Your name.."><label for="f_street">Ulica</label><input type="text" id="f_street" name="f_street" placeholder="Your name.."><label for="f_city">Miasto</label><input type="text" id="f_city" name="f_city" placeholder="Your last name.."><label for="f_postalCode">Kod pocztowy</label><input type="text" id="f_postalCode" name="f_postalCode" placeholder="Your last name.."><label for="subject">Uwagi</label><textarea id="f_subject" name="subject" placeholder="Write something.." style="height:200px"></textarea><input type="submit" value="zarezerwuj"><input type="submit" value="wypożycz"><input type="submit" value="kup"></form>';
			$.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/order/',
            data: test,
            success: function(data){
                $(".product").remove();
                $("#title").after(text);


            }
            
          });
     	});
    **/
     	$(document).on('click','.categories', function(e){
     		e.preventDefault();

     		var kod = this.id;
     		console.log("test: " + kod);

     		$.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/categories',
            data: {TwG_Kod: kod},
            success: function (data) {

            	$(".product").remove();
            	var x="";
            	for (i in data){
            		
            		x= x +"<div class='product-img'><img src='./assets/images/coctail.jpg' class='prodImg'></div><div class='products-description'>" + data[i].Twr_Nazwa + data[i].Twr_Opis + "</div><div class='product-ammount'>" + data[i].TwZ_Ilosc + "</div><div class='product-value'>" + data[i].TwZ_Wartosc + "</div><form class='buyForm' method='post'><div class='product-info'><input id='reservation "+i+"' name='reservation' type='text' class='reservation'> </div></form><div class='button'><button id='buy"+i+"' class='buttonBuy' type='button' onclick='window.open('print.html', 'newwindow','width=300,height=250'); return false;>zarezerwuj</button> </div>";
            	}
            	$("#title").after("<div class='product'>"+x+"</div>");
            },
            dataType: "json"
        		
        	})

     		
     	})


$(function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 20000,
      values: [ 100, 300 ],
      slide: function( event, ui ) {
        $( "#amount" ).html( "" + ui.values[ 0 ] + " PLN" + " - " + ui.values[ 1 ] +" PLN" );
		$( "#amount1" ).val(ui.values[ 0 ]);
		$( "#amount2" ).val(ui.values[ 1 ]);
      }
    });
    $( "#amount" ).html($( "#slider-range" ).slider( "values", 0 ) +" PLN" + " - " + $( "#slider-range" ).slider( "values", 1 ) + " PLN" );
 
	$("#filterForm").on('submit' ,function(e){
		e.preventDefault();
		console.log("Min Value wyslana na server " + $("#slider-range" ).slider( "values", 0 ));
		
		$.ajax({
            type: 'post',
            url: '/4hifi/index.php/welcome/filter/',
            data: { minP: $("#slider-range" ).slider( "values", 0 ), maxP: $("#slider-range" ).slider( "values", 1)},
            success: function (data) {
            	 	
            	//console.log(data);
            	$(".product").remove();
            	
            	var x="";
            	for (i in data){
            		
            		x= x +"<div class='product-img'><img src='./assets/images/audioGD.jpg'></div><div class='products-description'>" + data[i].Twr_Nazwa + data[i].Twr_Opis + "</div><div class='product-ammount'>" + data[i].TwZ_Ilosc + "</div><div class='product-value'>" + data[i].TwZ_Wartosc + "</div><form class='buyForm' method='post'><div class='product-info'><input id='reservation "+i+"' name='reservation' type='text' class='reservation'> </div></form><div class='button'><button id='buy"+i+"' class='buttonBuy' type='button' onclick='window.open('print.html', 'newwindow','width=300,height=250'); return false;>zarezerwuj</button> </div>";
            	}
            	$("#title").after("<div class='product'>"+x+"</div>");

            },
            dataType:"json"
		})
		})
		});
