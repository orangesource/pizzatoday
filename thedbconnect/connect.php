<?php

$host = "";
$dbname = "";
$username = "";
$pass = "";

$db = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=utf8', $username, $pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
?>