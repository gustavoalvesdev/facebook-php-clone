<?php 

session_start();

$base  = 'http://localhost/facebook-php-clone';

$db_name = 'devsbookoo';
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO('mysql:dbname='.$db_name.';host='.$db_host, $db_user, $db_pass);
