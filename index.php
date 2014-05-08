<?php
	include_once("includes/header.php");
?>
<div id='wrapper_content'>
    <div class='twocolumnarea pizza_bestellen'><?php echo $siteFunctions->storeLocator("Waar wil je een pizza bestellen?","Vul je woonplaats of postcode in:", "storelocator", "searchtagg");?></div>
    <div class='twocolumnarea product_zoeken'><?php echo $siteFunctions->search("Product zoeken","", "search", "searchname", "categorie");?></div>
    <div class='clearfix'></div>

	<!-- sidebar producten -->
	<div class="sidebar">
		<div class="infotop">MENU</div>
			<div class="content">
				<li class="cat_title"><a href"/">Pizza</a></li>
				<li class="product_title"><a href"/">Alle pizza's (25)</a></li>
				<li class="product_title"><a href"/">Vis pizza's (1)</a></li>
				<li class="product_title"><a href"/">Actie pizza's (1)</a></li>
				<li class="cat_title"><a href"/">Pasta</a></li>
				<li class="product_title"><a href"/">Alle (15)</a></li>
			</div>
	</div>

	<!-- overzicht producten -->
	<div class="product_overzicht">
		<div class="infotop">PIZZA'S</div>
			<div class="content">

				<div class="product">
					<p class="price">&euro; 9,90</p>
					<div class="product_img">
						<img class="" src="img/producten/pizza.jpg">
					</div>
					<p class="product_title">Pizza quatro</p>
					<form action="" method="POST" class="product_acties">
						<input type="text" name="aantal" value="2" placeholder="1">
						<input type="submit" name="favorite" value="1" class="active">
						<input type="submit" name="cart" value="1" class="active">
					</form>
				</div>

				<div class="product">
					<p class="price">&euro; 9,90</p>
					<div class="product_img">
						<img class="" src="img/producten/pizza.jpg">
					</div>
					<p class="product_title">Pizza quatro</p>
					<form action="" method="POST" class="product_acties">
						<input type="text" name="aantal" value="2" placeholder="1">
						<input type="submit" name="favorite" value="1" class="">
						<input type="submit" name="cart" value="1">
					</form>
				</div>

				<div class="product">
					<p class="price">&euro; 9,90</p>
					<div class="product_img">
						<img class="" src="img/producten/pizza.jpg">
					</div>
					<p class="product_title">Pizza quatro</p>
					<form action="" method="POST" class="product_acties">
						<input type="text" name="aantal" value="2" placeholder="1">
						<input type="submit" name="favorite" value="1" class="">
						<input type="submit" name="cart" value="1">
					</form>
				</div>

				<div class="product">
					<p class="price">&euro; 9,90</p>
					<div class="product_img">
						<img class="" src="img/producten/pizza.jpg">
					</div>
					<p class="product_title">Pizza quatro</p>
					<form action="" method="POST" class="product_acties">
						<input type="text" name="aantal" value="2" placeholder="1">
						<input type="submit" name="favorite" value="1" class="active">
						<input type="submit" name="cart" value="1">
					</form>
				</div>

				<div class="product">
					<p class="price">&euro; 9,90</p>
					<div class="product_img">
						<img class="" src="img/producten/pizza.jpg">
					</div>
					<p class="product_title">Pizza quatro</p>
					<form action="" method="POST" class="product_acties">
						<input type="text" name="aantal" value="2" placeholder="1">
						<input type="submit" name="favorite" value="1" class="">
						<input type="submit" name="cart" value="1">
					</form>
				</div>

				<div class="product">
					<p class="price">&euro; 9,90</p>
					<div class="product_img">
						<img class="" src="img/producten/pizza.jpg">
					</div>
					<p class="product_title">Pizza quatro</p>
					<form action="" method="POST" class="product_acties">
						<input type="text" name="aantal" value="2" placeholder="1">
						<input type="submit" name="favorite" value="1" class="">
						<input type="submit" name="cart" value="1">
					</form>
				</div>

			</div>
	</div>

</div>
<?php
	include_once("includes/footer.php");

?>