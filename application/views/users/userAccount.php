
<div class="product">
	<div class="product-description">
		<h1> Twoje Zamówienia </h1> <br>
<?php

foreach($user as $key){
?> 
		 <?php  echo "Zamówiłeś: " . $key['Twr_Kod']. "Ilość: " . $key['order_ammount'];    ?> <br><?php


}

?>
</div>
</div>