<?php
//Haal de juiste classe op
require "../config/config.php";
require "../classes/databaseclass.php";
require "../classes/formclass.php";

$db = new database(_HOST, _DB, _USER, _PASS);


$checkForm->setUserdata($_POST['email'], $_POST['pass']);

if($checkForm->notEmpty() == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => "U heeft geen geldige E-Mail ingevuld!"));
}elseif($checkForm->allowedEmail() == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => "U heeft geen geldige E-Mail ingevuld!"));
}elseif($checkForm->emailExist() == false){
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => "U heeft geen geldige E-Mail ingevuld!"));
}else{
	echo json_encode(array('success' => false, 'data' => $_POST, 'msg' => "Email klopt!"));
}
?>