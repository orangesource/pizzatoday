<?php
//Haal de juiste classe op
require "../classes/databaseclass.php";
require "../classes/formclass.php";

$checkForm = new checkForm;
$db = new database;

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