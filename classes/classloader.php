<?php
/*function __classload() {
	$dir = "classes";
	$dh  = opendir($dir);
	while (false !== ($filename = readdir($dh))) {
		if($filename != "" OR !empty($filename)){
			$files[] = $filename;
		}
	}

	for($i = 0; $i <=count($files); $i++){
		$newfile = str_replace(array(".", "..", "php"), '', $files);
		if(!empty($newfile[$i]) OR $newfile[$i] != ""){
			//echo $newfile[$i];
			echo $newfile[2].".php";
			
			include_once($newfile[$i].".php");
		}
	}
	
	$form = new checkForm();
	
	if($form->checkUsername("asdasd") == true){
		echo "ja";
	}
	
}*/		

function autoLoadClasses($className) {
    $filename = "classes/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
 
 
spl_autoload_register("autoLoadClasses");

	
?>