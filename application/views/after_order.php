
<div class="lewy">
<h1> Dziękujemy za zamówienie</h1>
<h2> Potwierdzenie zostało wysłane na maila</h2>


<div>
	Zamówiłeś:
<?php  
	$suma = 0;
	foreach ($ordered as $key){
		?> <div>
		<?php echo $key['product_name'];      //Gaba: tutaj są wyświetlane po kolei wszystkie zamówione produkty
		?> </div> <?php
		$suma = $suma + $key['order_amount']*$key['price'];    //Gaba: to nie jest wyświetane
		
		
	}
 ?>
</div>
<div>
 za łączną kwotę: 
 <?php  echo $suma //Gaba: tutaj wyświetlana jest cena  ?> zł
</div>
<button>wydrukuj</button>
</div>
