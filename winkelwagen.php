<?php
	include_once("includes/header.php");
?>
<div id='wrapper_content'>

   <!-- Order lijst -->
	<div class="order_list">
		<div class="infotop">PRODUCTEN</div>
		<div class="content mb20">
			<div class="list_container">
			<img src="img/producten/pizza.jpg" class="product_thumb" />
			<ul class="orderlist">
				<li class="underline">
					<p class="product_title">Pizza Margaritha &euro; 9.90</p>
					<p class="amount">Totaal: &euro; 29.70</p>
				</li>
				<li>AANTAL: 3</li>
				<li>Bodem:  medium (30 cm)</li>
				<li>saus:  tomatensaus</li>
				<li>toppings:  -</li>

				<a href="#"><div class="verwijderen">VERWIJDEREN</div></a>
			</ul>
			</div>
		</div>
	</div>


    <!-- Totaal winkelwagen -->
	<div class="total_cart">
		<div class="infotop">TOTAAL WINKELWAGENTJE</div>
		<div class="content">
				<ul class="totalcart">
					<li>
						<p>Totaal aantal:</p>
						<p class="w90 tr">2</p>
					</li>
					<li>
						<p>Totaal bedrag:</p>
						<p class="w90 tr">&euro; 29.70</p>
					</li>
					<li>
						<p>Korting:</p>
						<p class="w90 tr">&euro; 0.00</p>
					</li>
					<li class="underline">
						<p>Subtotaal:</p>
						<p class="w90 tr">&euro; 19.80</p>
					</li>
					<li class="underline">
						<p>Totaal:</p>
						<p class="w90 tr">&euro; 19.80</p>
					</li>


					<a href="#"><div class="pay">AFREKENEN</div></a>
				</ul>

		</div>
	</div>

	<div class='clearfix'></div>





</div>
<?php
	include_once("includes/footer.php");

?>