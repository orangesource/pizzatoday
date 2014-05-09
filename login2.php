<?php

require("classes/databaseclass.php");

$db = new database("localhost","pizzatoday","root", "");
echo $db->query("SELECT `email` FROM `cms_users`");


?>
<form method='post'>
	<input type='text' name='user'><br/>
    <input type='submit' name='send'>
</form>