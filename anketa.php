<?php 

// print_r($_POST);

if(isset($_POST['p'])){
	echo $_POST['p'];
}

if(isset($_POST['food'])){
	
	// 1
	foreach ($_POST['food'] as $f) {
		echo $f;
		echo '<br/>';
	}

	// 2
	echo implode(' - ', $_POST['food']);
}


// print_r($_POST);


//http://localhost/swt-2017/anketa.php?p=5&food[]=pizza&food[]=Lasagna&food[]=burek

?>