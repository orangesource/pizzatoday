<?php
	include_once("includes/header.php");
?>
<div id='wrapper_content'>
    <!-- Filiaal zoeken -->
	<div class="filiaal_zoeken">
		<div class="infotop">FILIAAL ZOEKEN</div>
		<div class="content">
			<form action="" method="POST">
				<input type="text" name="filiaal_invoer" >
				<input type="submit" name="filiaal_zoeken" value="ZOEKEN">
			</form>
		</div>
	</div>

	<div class="filiaal_info">
		<div class="infotop">GEVONDEN FILIALEN</div>
		<div class="content">
			<div class="filiaal">
				<img class="store_thumb" src="img/stores/store.png"/>
				<p class="store_name">Amsterdam</p>
				<p class="store_adress">Winkelplein 10 3875 OP</p>
				<a href="#"><div class="meer_info">MEER INFO</div></a>
			</div>

			<div class="filiaal">
				<img class="store_thumb" src="img/stores/store.png"/>
				<p class="store_name">Amsterdam</p>
				<p class="store_adress">Winkelplein 10 3875 OP</p>
				<a href="#"><div class="meer_info">MEER INFO</div></a>
			</div>
		</div>
	</div>

	<div class='clearfix'></div>

	<!-- Filiaal zoeken -->
	<div class="maps_panel">
		<div class="infotop">FILIALEN IN DE BUURT</div>
		<div class="content">

		</div>
	</div>



</div>
<?php
	include_once("includes/footer.php");

?>