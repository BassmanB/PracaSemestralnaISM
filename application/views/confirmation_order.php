<div class="lewy tresc">

<h1>Potwierdzenie zamówienia</h1>



<div style="padding:20px; border:1px solid #cccccc; width:600px">
	Zamówiłeś:
<?php  
	$suma = 0;
	foreach ($ordered as $key){
		?> <div style="padding:10px">
		<?php echo $key['product_name'];      //Gaba: tutaj są wyświetlane po kolei wszystkie zamówione produkty
		?> &nbsp; 1szt  &nbsp; 10670zł</div> <?php
		$suma = $suma + $key['order_amount']*$key['price'];    //Gaba: to nie jest wyświetane
		
		
	}
 ?>
 <p style="margin-left:150px">Razem: 23900zł</p>
 <p style="margin-left:150px">Transport: kurier  0zł</p>
 <div>
<p style="margin:30px">
Razem do zapłaty: 
 <?php  echo $suma //Gaba: tutaj wyświetlana jest cena  ?> zł
</p></div>
</div>

<div class="lewy" style="padding:20px; border:1px solid #cccccc; margin:20px 0; border-radius:5px; width:270px"><p>Dane do faktury:</p>
ADVATUS Spółka z o.o.<br />
ul. Leona Wyczółkowskiego 10<br />
44-109 Gliwice</div>
<div class="lewy" style="padding:20px; border:1px solid #cccccc; border-radius:5px; margin:20px; width:270px">
	Dane do wysyłki
	<?php 
	
		?><div> 
			firma
		</div>
		<div> 
			Portugalia
		</div>
		<div> 
			Funchal
		</div>
		<div> 
			Rua Santa Maria 44
		</div>
		<div> 
			666 666 666 666
		</div>
		<div> 
			55555
				
		</div>
		<div>
		 firma@email.com
		</div>

</div>
<div class="cb" >
<div class="lewy" style="width:450px; padding:10px; text-align:justify; font:14px/20px Arial">
Wciśnięcie tego przycisku oznacza złożenie zamówienia. Taka treść dotrze do nas. Dlatego teraz upewnij się czy zawartość zamówienia, adres dostawy, dane do wystawienia faktury, forma  dostawy są prawidłowe.<br />
<button class="but3">Wróć do edycji zamówienia</button>


</div>
<div class="lewy cent" style="padding:20px">
<form method="post" action="/index.php/welcome/order/">
    <button onclick="javascript:koszykOrder()" class="but2">Złóż zamówienie</button>
</form>
</div>
</div>
</div>
