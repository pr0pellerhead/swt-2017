<?php 

header('Content-Type: text/html; charset=utf-8');

$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$email = trim($_POST['email']);
$password1 = trim($_POST['password1']);
$password2 = trim($_POST['password2']);

$err = 0;

if(strlen($firstname) <= 2){$err++;}
if(strlen($lastname) <= 2){$err++;}
if(strlen($password1) <= 6 || strlen($password2) <= 6 || $password1 != $password2){$err++;}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){$err++;}

if($err == 0){
	echo 'Креиран е корисникот '.$firstname.' '.$lastname.' со email '.$email.' и лозинка '.$password1;
} else {
	echo 'Корисникот не е креиран! Сите полиња мора да бидат соодветно пополнети';
}

?>