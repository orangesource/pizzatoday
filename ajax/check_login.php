<?php
session_start();

//Haal de juiste classe op
require "../classes/databaseclass.php";
require "../classes/formclass.php";
require "../classes/userclass.php";
require "../classes/sessionclass.php";
require "../config/config.php";
 
//Maak de class connetie 
$db = new database();
$db->startConnect(_HOST, _DB, _USER, _PASS);
$checkForm = new checkForm($db);
$checkForm->setUserdata($_POST['email'], $_POST['pass']);
<<<<<<< HEAD
$_CUS = new CUS($db); 
=======
$sessionClass = new sessionClass($db); 
>>>>>>> 6960a91d2bcfc7916b7411b7f5207f75cbb237b7
$userData = new userData($db);
 
//Error beheer
$ERROR = array(
0 => "U bent succesvol aangemeld!",
1 => "U heeft geen E-Mail opgegeven!",
2 => "U heeft geen geldige E-Mail opgegeven!",
3 => "De opgegeven E-Mail bestaat niet!",
4 => "U heeft geen Password opgegeven!",
5 => "Het opgegeven Password is niet correct!",
);
 
$query = "SELECT * FROM `cms_users`";
$sth = $db->query($query);
$data = $sth;		
 
// echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => $data->email));
if($checkForm->userNotEmpty() == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => $ERROR[1]));
}elseif($checkForm->allowedEmail() == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => $ERROR[2]));
}elseif($checkForm->checkEmail($_POST['email']) == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => $ERROR[3]));
}elseif($checkForm->passNotEmpty() == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => $ERROR[4]));
}elseif($checkForm->checkPass($_POST['email']) == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => $ERROR[5]));
}else{
	$userID = $userData->getUserID($_POST['email']);
<<<<<<< HEAD
	$_CUS->createCUS($userData);
	$_CUS->activateSessions($_POST['email']);
=======
	$sessionClass->createCUS($userData);
	$sessionClass->activateSessions($_POST['email']);
>>>>>>> 6960a91d2bcfc7916b7411b7f5207f75cbb237b7
	echo json_encode(array('success' => true, 'data' => $_POST, 'msg' => $ERROR[0]));
}
 ?>