<?php
function autoLoadClasses($className) {
    $filename = "classes/" . $className . ".php";
    if (is_readable($filename)) {
        require $filename;
    }
}
 
spl_autoload_register("autoLoadClasses");	
?>