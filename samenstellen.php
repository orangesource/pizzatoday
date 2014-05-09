<?php
	include_once("includes/header.php");
?>
<div id='wrapper_content'>

   <!-- Order lijst -->
	<div class="samenstellen">
		<div class="infotop">SAMENSTELLEN</div>
		<div class="content">
			<form action="" method="POST">
				<li>
					<p>Kies je bodem</p>
					<input type="radio" name="bodem_soort" value="1">Italiaanse dunne bodem
					<input type="radio" name="bodem_soort" value="2">NY style bodem
				</li>
				<li>
					<p>Kies je formaat</p>
					<input type="radio" name="formaat" value="1">Italian Dunne Bod 30 cm
					<input type="radio" name="formaat" value="2">Large Italian (35cm)
					<input type="radio" name="formaat" value="3">25 CM
				</li>
				<li>
					<p>Kies je saus</p>
					<input type="radio" name="saus" value="1">Tomatensaus
					<input type="radio" name="saus" value="2">Extra tomatensaus
					<input type="radio" name="saus" value="3">BBQ saus
					<input type="radio" name="saus" value="4">Geen saus
				</li>
				<li>
					<p>Kies je toppings</p>
					<input type="checkbox" name="topping" value="Bike">I have a bike<br>
					<input type="checkbox" name="topping" value="Car">I have a car
				</li>
				<li>
					<p>Geef je pizza een naam</p>
					<input type="text" name="pizza_naam" placeholder="Mijn pizza">
				</li>
			</form>
		</div>
	</div>

	<div class='clearfix'></div>





</div>
<?php
	include_once("includes/footer.php");

?>