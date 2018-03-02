<?php 

// print_r($_FILES);

$filename = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];
$err = $_FILES['image']['error'];
$size = $_FILES['image']['size'];
$type = $_FILES['image']['type'];

$allowed = ['image/jpeg', 'image/png', 'image/pjpeg'];

if($err > 0){
	echo 'Error while uploading!';
	exit();
}

if(!in_array($type, $allowed)){
	echo "Filetype not allowed";
	exit();
}

if($size >= 300 * 1024){
	echo "File is too big!";
	exit();
}

$random_prefix = rand(1000000000, 9999999999);
$filename = $random_prefix.'_'.$filename;

move_uploaded_file($tmp, 'uploads/'.$filename);

?>

<img src="uploads/<?=$filename;?>">