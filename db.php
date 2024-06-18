<?php
$host="localhost";
$db_name="php_app";
$db_user= "root";
$db_pass= "";


try{
$pdo = new PDO("mysql:host=$host;dbname=$db_name;charset=utf8mb4", $db_user, $db_pass);
}

?>