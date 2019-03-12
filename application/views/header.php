<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>4 HIFI local host website development</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>
  <link rel="stylesheet"
    href="https://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />



</head>

<body>
	<div class="navbar">
		<div class="navbar2">
      		<div class="navbar_link" style="width:300px; text-align:left"><a href="/index.php/welcome/index2/"><img src="<?php echo base_url(); ?>/assets/images/logo.png" style="width:130px" /></a></div>
     <!-- <div style="text-align:left">
    	<div class="navbar_link">
     		 <a href="/4hifi/" class="menuG" >Home </a>
    	</div>
    	<div class="navbar_link" >
      	  <a href="javascript:form();" id="account" class="menuG">moje zamówienia</a>
          <!--
             <form method='post' action="/4hifi2/index.php/welcome/account/">
            <input type="submit" id="account" class="menuG" value=''>
          </form>
          !-->
    		<!-- </div>
    	 	<div class="navbar_link"><a href="" class="menuG">Link</a></div>
        	<div class="navbar_link"><a href="" class="menuG">Link</a></div>
    		</div>
     -->

			<div class="find">
      			<form method='post' action='/index.php/welcome/search/' id="myForm2">

        		<input id="search" type="text" placeholder="Szukaj..." name="search" class="search">

        		<input id="subm2" type='submit' name='submit' src="<?php echo base_url(); ?>/assets/images/search_p.png" value='&nbsp;' style="vertical-align:bottom; background:#e2000f url(<?php echo base_url(); ?>/assets/images/search_p.png) no-repeat center; width:44px; height:44px; cursor:hand; border:0; border-radius:8px">
      			</form>
      		</div>
      		<div class="menuLog" >
       			<div class="right" >
            <?php
            if(isset($userdata['if_user_logged'])==0){
              $userdata = array(
                  'username' => '',
                  'password' => '',
                  'if_user_logged' =>0
                );
            }      
            if($userdata['if_user_logged']!=1){    ?>
     		 		<form method='post' action='/index.php/welcome/login/' id="myForm">
        			<input type="text" id="username" name='username' placeholder="e-mail">
        			<input type="password" id="password" name='password' placeholder="hasło">
       	 			<input type="submit" name="submit id="subm"  value='zaloguj' class="subm">
      				</form>
            <?php  } else { ?>

                <input type="hidden" name="user" value="'+data+'">
                <button id="logout" class="but3" style="padding:2px 10px; margin-left:20px"><a href="/index.php/welcome/logout/">wyloguj</a></button>
                </div>
                <div style="clear:both; text-align:right; margin:40px 10px 0 0; border-top:1px solid #999999; border:1px solid #999999; border-radius:5px; padding:5px 0 5px 0">
                 
                <a href="/index.php/welcome/showKoszyk/" class="menuG"> Koszyk </a>
                <a href="/index.php/welcome/showRent/" class="menuG"> Wypożyczenie </a>
                <a href="/index.php/welcome/showReservations/" class="menuG"> Rezerwacje </a>
                <?php if($userdata['username']=='admin@admin.pl'){  ?>
                <a href="/index.php/welcome/ordersAdministration/" class="menuG"> Kontrola zamówień </a>
              <?php }} ?>
               
                <a id="data"><?php echo $userdata['username']; ?></a>
                <input type="hidden" name="user" value="'+data+'">
				</div>
			</div>
		</div>
	</div>
<div class="container" >

<script>
 $(document).on('click', '#subm2', function (e) {

          e.preventDefault();

          var text = $('#search').val();
          console.log(text);
          $.ajax({
            type: 'post',
            url: '/index.php/welcome/search/',
            data: {search:text},
            success: function (data) {
              var x ="<div class='product-img'><img src='<?php echo base_url(); ?>/assets/images/"+data[0].DAB_NazwaPliku+".jpg'></div><div class='products-description'>" + data[0].Twr_Kod+ "  " + data[0].Twr_Nazwa+ "  " + data[0].cena + " zł" +"</div></div><input class='buttonR koszykOrder' type='submit'  value='rezerwuj' name='rezerwuj'/><input class='buttonW koszykOrder' type='submit'  value='wypożycz' name='wypozycz'/><input  class='buttonK koszykOrder' type='submit'  value='kup' name='kupuj'/>"; 
              $(".product").remove();
              $("#title").after("<div class='products' >" + x + "</div>");
          },
          dataType: "json"

        });
    });

</script>