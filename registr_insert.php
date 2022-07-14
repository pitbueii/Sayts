<?php
header('Content-Type: text/html; charset=utf-8');
$db_host = 'localhost';
    $db_user = 'root';
    $db_password = 'root';
    $db_base = 'US';


    $mysqli =mysqli_connect($db_host,$db_user,$db_password,$db_base);
	mysqli_query($mysqli, "SET NAMES 'utf8';");

?>