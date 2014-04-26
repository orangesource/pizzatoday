<?php
error_reporting(E_ALL);
include("classes/classloader.php");

//Laad alle classes in die in de directory classes staan


?>
<!doctype html>
<html>
<head>
<link type='text/css' href='css/style.css' rel='stylesheet'>
<meta charset="utf-8">
<title>Naamloos document</title>
</head>

<body>
<div id='header'>
	<div id='wrapper_header'>
    	<div id='header_column'>
        	<?php 
				autoLoadClasses("checkForm");
				
				$form = new checkForm();
				
				if($form->checkUsername("Johannie") == true){
					echo "Ja";	
				}
			?>
        </div>
    </div>
</div>
<div id='nav'>
	<div id='wrapper_nav'>
    	<div class='menuitem menuactive'>HOME</div>
        <div class='menuitem'>WINKELS</div>
        <div class='menuitem'>PIZZA'S</div>
        <div class='menuitem'>OVERIGE PRODUCTEN</div>
	</div>
</div>

<?php
	
?>