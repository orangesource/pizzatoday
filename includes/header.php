<?php
error_reporting(E_ALL);
session_start();
ob_start();

//Include belangrijke bestanden **Zonder deze werkt de site niet**
include("classes/classloader.php");
include("config/config.php");
<<<<<<< HEAD

=======
>>>>>>> 6960a91d2bcfc7916b7411b7f5207f75cbb237b7

//Laad classe in
autoLoadClasses("databaseclass");
autoLoadClasses("siteclass");
autoLoadClasses("formclass");
autoLoadClasses("sessionclass");
autoLoadClasses("userclass");

//Roep het database op
$db = new database();
$db->startConnect(_HOST, _DB, _USER, _PASS);

//Defineer de classes
$siteFunctions = new siteFunctions;
$checkForm = new checkForm($db);
$userData = new userData($db);
<<<<<<< HEAD
$_CUS = new CUS($db);
=======
$sessionClass = new sessionClass($db);

if($_SESSION['user_id'] != ""){
	$userData->setUserData($_SESSION['user_id']);	
}
>>>>>>> 6960a91d2bcfc7916b7411b7f5207f75cbb237b7

//Pagina's in de NAV
$pages = array("HOME","WINKELS", "PIZZA'S", "OVERIGE PRODUCTEN");

?>
<!doctype html>
<html>
<head>
<link type='text/css' href='css/style.css' rel='stylesheet'>
<script type='text/javascript' src='http://code.jquery.com/jquery-latest.min.js'></script>
<meta charset="utf-8">
<title><?php echo $siteFunctions->sitetitle();?></title>
</head>

<body>
<div id='header'>
	<div id='wrapper_header'>
    	<div id='header_column'>
        	<a href="" class="login">Login/Registreer</a>
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
<<<<<<< HEAD
			<ul class="favorite_menu"><p class="favorites">3</p>
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
			</ul>
		</div>

		<div class="trigger_cart">
			<ul class="cart_menu"><p class="cart_amount">3</p>
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
			</ul>
=======
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
>>>>>>> 6960a91d2bcfc7916b7411b7f5207f75cbb237b7
		</div>
	</div>
</div>


