<?php
error_reporting(E_ALL);
include("classes/classloader.php");
include("thedbconnect/connect.php");

//Laad classe in
autoLoadClasses("siteclass");
autoLoadClasses("databaseclass");

//Defineer de classes
$siteFunctions = new siteFunctions;

//Pagina's in de NAV
$pages = array("HOME","WINKELS", "PIZZA'S", "CONTACT");

?>
<!doctype html>
<html>
<head>
<link type='text/css' href='css/style.css' rel='stylesheet'>
<meta charset="utf-8">
<title><?php echo $siteFunctions->sitetitle();?></title>
</head>

<body>
<div id='header'>
	<div id='wrapper_header'>
    	<div id='header_column'>
        	<a class="login">Login/Registreer</a>
        	<div class="vertical_divider"></div>
        	<p class="tot_amount">&euro; 29.70</p>
        </div>
    </div>
</div>
<div id='nav'>
	<div id='wrapper_nav'>
    	<?php
			$i = 1;
			foreach($pages as $data)
			{
				echo "<div class='menuitem id".$i++."'><a href=''>".$data."</a></div>";
			}
		?>
		<div class="trigger_favo">
			<div class="favorite_menu"><p class="favorites">3</p></div>
			<div class="favorite_info">
				<div class="product_info">
					<img src="img/producten/pizza.jpg" class="product_thumb" />
					<p class="fav_title"><a href="">Pizza Margaritha</a></p>
					<p class="fav_price">&euro; 9.90</p>
					<a class="delete_favorite">X</a>
				</div>

				<div class="product_info">
					<img src="img/producten/pizza.jpg" class="product_thumb" />
					<p class="fav_title"><a href="">Pizza Margaritha</a></p>
					<p class="fav_price">&euro; 9.90</p>
					<a class="delete_favorite">X</a>
				</div>

				<div class="product_info">
					<img src="img/producten/pizza.jpg" class="product_thumb" />
					<p class="fav_title"><a href="">Pizza Margaritha</a></p>
					<p class="fav_price">&euro; 9.90</p>
					<a class="delete_favorite">X</a>
				</div>

				<p class="favorite_all"><a >Bekijk alles</a></p>
			</div>
		</div>
		<div class="trigger_cart">
			<div class="cart_menu"><p class="cart_amount">3</p></div>
			<div class="cart_info">
				<div class="product_info">
					<img src="img/producten/pizza.jpg" class="product_thumb" />
					<p class="fav_title"><a href="">Pizza Margaritha</a></p>
					<p class="fav_price">&euro; 9.90</p>
					<a class="delete_favorite">X</a>
				</div>

				<div class="product_info">
					<img src="img/producten/pizza.jpg" class="product_thumb" />
					<p class="fav_title"><a href="">Pizza Margaritha</a></p>
					<p class="fav_price">&euro; 9.90</p>
					<a class="delete_favorite">X</a>
				</div>

				<div class="product_info">
					<img src="img/producten/pizza.jpg" class="product_thumb" />
					<p class="fav_title"><a href="">Pizza Margaritha</a></p>
					<p class="fav_price">&euro; 9.90</p>
					<a class="delete_favorite">X</a>
				</div>
				<p class="total_amount">&euro; 29.70</p>
				<p class="cart_all"><a href="#">Bekijk winkelwagen / Afrekenen</a></p>
			</div>
		</div>
	</div>
</div>


