<div id="right"> 
   
<h1 id="title" class="tit"> Produkty  >> <?php echo $sciezka ?> </h1>
<div class="calosc">	
<?php foreach($categories2 as $key){
		?> <div class="kategorie"><a href="" class="katL"><img src="<?php echo base_url(); ?>/assets/images/knob15.png" style="width:10px; margin:0 5px" /> <?php echo $key['TwG_Nazwa']; ?> </a></div>
	<?php
	}	
	?>
	</div>
	<div class="product">
	<?php
	$licz=1;
	foreach($products as $key){

	?> 
		<div class="product-img" >
			<img src="<?php echo base_url(); ?>/assets/images/audioGD.jpg" class="prodImg">
		</div>  

		<div class="product-description">
			<a id="productName<?php echo $licz; ?>" ><?php echo $key['Twr_Kod']; ?>   </a><br>
			<?php echo $key['Twr_Nazwa']; ?> <br>
			<?php echo $key['Twr_Opis'];  ?> <br>

		</div>
		<div class="product-ammount">
      <?php if($key['TwZ_Ilosc']!=0){
			 echo "dostępna ilość: " ?> <?php echo intval($key['TwZ_Ilosc']); ?><br>
      <?php }else {  ?>
         magazyn zewnętrzny.
        <?php } ?>


		</div>
		<div class="product-value">
					<a id='productPrice<?php echo $licz; ?>'>	<?php echo substr((string)$key['TwC_Wartosc'], 0 , -2);  ?> </a> PLN<br>
		</div>
		
        <form id="koszykForm<?php echo $licz; ?>" method="post" action="/4hifi/index.php/welcome/koszyk/" class="orderProduct">
             <input id="amount<?php echo $licz;?>" type="number" name="amount" style="width:40px">
             <input id="kod<?php echo $licz;?>" type="hidden" name="kod" value="<?php echo $key['Twr_Kod'];?>">
         	   <input id="price<?php echo $licz;?>" type="hidden" name="price" value="<?php echo substr((string)$key['TwC_Wartosc'], 0 , -2);?>" >
             <input id="<?php echo $licz; ?>" class="buttonBuy" type="submit"  value="zarezerwuj" name="rezerwuj"/> 
             <input id="<?php echo $licz; ?>" class="buttonBuy" type="submit"  value="kup" name="kupuj"/> 
        </form>
<?php $licz = $licz + 1;}; ?>
 </div>
</div>