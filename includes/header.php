<?php
error_reporting(E_ALL);
include("classes/classloader.php");

//Laad classe in
autoLoadClasses("siteclass");

//Defineer de classes
$siteFunctions = new siteFunctions;

//Pagina's in de NAV
$pages = array("HOME","WINKELS", "PIZZA'S", "OVERIGE PRODUCTEN");

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
	</div>
</div>