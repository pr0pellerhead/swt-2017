<?php 
// user_validation.php

$EMAIL = 'bojang@gmail.com';
$PASSWORD = 'aaa';


$username = 'root';
$password = '';
$host = '127.0.0.1'; // 
$dbname = 'blog'; // 

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

$db = new PDO($dsn, $username, $password);

print_r($db);

$sql = 'select id, email from users where email = :email and password = :password'; // SQL
$query = $db->prepare($sql); // SQL
$query->bindValue(':email', $EMAIL); // SQL
$query->bindValue(':password', $PASSWORD); // SQL

$query->execute(); // WORK

$user = $query->fetchAll(PDO::FETCH_ASSOC); // DATA

print_r($user);
?>
