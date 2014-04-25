<?php
class checkForm{
	public function checkUsername($username)
	{
		if(empty($username)){
			return false;
		}elseif(!ctype_alnum(trim($username))){
			return false;
		}
		return true;
	}
	public function checkEmail($email)
	{
		if($email == ""){
			return false;	
		}elseif(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
			return false;
		}
		return true;
	}
}
?>