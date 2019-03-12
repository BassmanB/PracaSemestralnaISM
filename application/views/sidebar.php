<div id="left" class="menuL">
        <div id="sidebar" >
            

        	<div class="sidebar_link" style="border-bottom:1px solid #cccccc">
         		 Kategorie Produktów
        	</div>

        	<?php
            $licz = 1;
    		foreach($categories as $key){   ?>
            	<div class="sidebar_link">
                    <form method="post" action="/index.php/welcome/categories/" id="categoriesF<?php echo $licz;?>">
                        <input name="kod" type="hidden" value="<?php echo $key['nazwa']; ?>">
                    </form>
              		<a href="#"  class="menuL categories"  id="<?php echo $licz ?>" ><?php echo $key['nazwa']; ?></a>
                        
                       
            	</div>

        	<?php 
            $licz = $licz + 1;
        }; ?>
     
        </div>
        <form id="filterForm" method="post" action="/index.php/welcome/filter/" class="marka">

        <input name="prod" class="producents" type="checkbox" id="AUDIO-GD" value="AUDIO-GD">Audio Gd<br>
        <input name="prod" class="producents" type="checkbox" id="ALPIN-LINE" value="ALPIN-LINE">Alpin Line <br>
        <input name="prod" class="producents" type="checkbox" id="AUDIOSOLUTIONS" value="AUDIOSOLUTIONS">Audiosolutions <br>
        <input name="prod" class="producents" type="checkbox" id="COCTAIL-AUDIO" value="COCTAIL-AUDIO">Coctail Audio<br>
        <input name="prod" class="producents" type="checkbox" id="FELIKS_AUDIO" value="FELIKS_AUDIO">Felix Audio <br>
        <input name="prod" class="producents" type="checkbox" id="KLOTZ" value="KLOTZ">Klotz<br>
        <input name="prod" class="producents" type="checkbox" id="LINE_MAGNETIC" value="LINE_MAGNETIC">Line Magnetic<br>
        <input name="prod" class="producents" type="checkbox" id="Schanling" value="Schanling">Schanling<br>
        <input name="prod" class="producents" type="checkbox" id="Yaqin" value="Yaqin">Yaqin<br>
    <p>
        Zakres Cen:<p id="amount"></p>
    </p>

    <div id="slider-range"></div>

  <form id="filterForm" method="post" action="/index.php/welcome/filter/" class="marka">
    
    <input type="submit" name ='submit' value="Filtruj" id="fSubmit" class="submW">
    
</form>

</div>
<script> 
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
    
    $(document).on('click','.submW' ,function(e){
        e.preventDefault();

        var minP=$("#slider-range").slider("values", 0);
        var maxP=$("#slider-range").slider("values", 1);
        var TwG_Kod=[];

            $("input:checkbox[name=prod]:checked").each(function(){
                TwG_Kod.push($(this).val());
            });
        console.log("kody: " + TwG_Kod);
        $("#fMaxP").val(maxP);
        $("#fMinP").val(minP);
        $("#fKod").val(TwG_Kod);

        document.getElementById("filterForm").submit();
        //console.log("Min Value wyslana na server " + $("#slider-range" ).slider( "values", 0 ));
        
           
        $.ajax({
            type: 'post',
            url: '/index.php/welcome/filter/',
            data: { minP: $("#slider-range" ).slider( "values", 0 ), maxP: $("#slider-range" ).slider( "values", 1), 
            TwG_Kod:TwG_Kod},
            
            success: function (data) {
                    
                //console.log(data);
                $(".product").remove();
                
                var x="";
                for (i in data){
                    
                    x= x +"<div class='product-img'><img src='./assets/images/audioGD.jpg'></div><div class='products-description'>" + data[i].Twr_Nazwa + data[i].Twr_Opis + "</div><div class='product-ammount'>" + data[i].TwZ_Ilosc + "</div><div class='product-value'>" + data[i].TwC_Wartosc + "</div><form class='buyForm' method='post'><input id='reservation "+i+"' name='reservation' type='text' class='reservation'><button id='buy"+i+"' class='buttonBuy' type='button'>zarezerwuj</button></form>";
                }
                $("#title").after("<div class='product'>"+x+"</div>");

            },
            dataType:"json"
        })
        })
        });
$(document).on('click','.categories', function(e){
            e.preventDefault();

            var kod = this.id;
            console.log("test: " + kod);
            id = this.id;
            document.getElementById("categoriesF"+id).submit();

            $.ajax({
            type: 'post',
            url: '/index.php/welcome/categories',
            data: {TwG_Kod: kod},
            success: function (data) {

                $(".product").remove();
                var x="";
                for (i in data){

                    if(kod=="W_AUDIO_GD" || kod=="LAMPY_ELEKTRONOWE" || kod=="LINE-MAGNETIC"){
                  x= x +"<form class='categoriesForm' method='post' action='/index.php/welcome/categories2/'>"+"\n"+
                  "<input type='hidden' id='gidNumer' name='gidNumer' value='"+data[i].TwG_GIDNumer+"'>"+"\n"+
                  "<div id='subCategories"+data[i].TwG_GIDNumer+"' class='products-description'>\n"+
                    "<a id='"+data[i].TwG_GIDNumer+"'>\n"+ 
                    
                       "<input  type='submit' value='"+data[i].TwG_Nazwa+"'/> \n"+
                      
                    "</a>\n"+
                  "</div>\n"+
                  "</form>";
                }
                else {
                    x= x +"<div class='product-img'>\n"+
                  "<img src='./assets/images/coctail.jpg' class='prodImg'>\n"+
                "</div> \n"+
                "<div class='products-description'> \n" + 
                data[i].Twr_Nazwa + data[i].Twr_Opis + "\n"+
                "</div> \n"+
                "<div class='product-ammount'> \n"+
                  "ilość: "+ Math.trunc(data[i].TwZ_Ilosc) +" cena: "+ data[i].TwZ_Wartosc + "\n"+
                "</div>\n"+
                "<form class='buyForm' method='post'>\n"+
                  "<div class='product-info'>\n"+
                    "<input id='reservation "+i+"' name='reservation' type='text' class='reservation'>\n"+
                  "</div>\n"+
                "</form>\n"+
                "<div class='button'>\n"+
                  "<button id='buy"+i+"' class='buttonBuy' type='button'>zarezerwuj</button>\n"+
                "</div>";
                }
            }
                $("#title").after("<div class='product'>"+x+"</div>");
            },
            dataType: "json"
                
            })
        })

      function categories(id){

          var id =id;
        
          $.ajax({
            type: 'post',
            url: '/index.php/welcome/categories2',
            data: {id: id}
    })
    }
        $("#logout").on('click' ,function(e){
            window.location.href('/index.php/welcome/logout/');
        })

        $(document).on('click','.koszykOrder', function(e){
        e.preventDefault();

        var id = this.id;
        console.log(id);
        console.log(this.name);

        alert("Dziękujemy za dodanie produktu do Koszyka");

        name = this.name;
        price = $("#price"+id).val();
        amount = $("#amount"+id).val();
        kod = $("#kod"+id).val();

        $.ajax({
            type: 'post',
            url: '/index.php/welcome/koszyk',
            data: {name: name, kod: kod, price: price, amount: amount},
            success: function (data) {
              console.log("dodałeś do koszyka");
            }

          })
      })
</script>
