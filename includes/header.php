<?php
error_reporting(E_ALL);
session_start();
ob_start();

include("classes/classloader.php");
include("thedbconnect/connect.php");

//Laad classe in
autoLoadClasses("databaseclass");
autoLoadClasses("siteclass");
autoLoadClasses("formclass");


//Defineer de classes
$siteFunctions = new siteFunctions;
$checkForm = new checkForm;
$database = new database;

//Roep het database op
$database->createConnect();
$db = $database->getDB();

$stmt = $db->query("SELECT `email` FROM cms_users");
$result = $stmt->fetch(PDO::FETCH_OBJ);

//Pagina's in de NAV
$pages = array("HOME","WINKELS", "PIZZA'S", "OVERIGE PRODUCTEN");

?>
<!doctype html>
<html>
<head>
<link type='text/css' href='css/style.css' rel='stylesheet'>
<meta charset="utf-8">
<title><?php echo $siteFunctions->sitetitle();?></title>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

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