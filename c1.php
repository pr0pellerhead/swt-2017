<?php

echo "<h1>Hello World</h1>";
$ime = '<h2>Bojan</h2>';
echo $ime;
$prezime = "Gavrovski";

?>

<div>
	<h1>Zdravo <?php echo $prezime; ?></h1>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium magnam, aliquid minima libero optio odit eveniet incidunt consectetur. Quod eligendi earum placeat reiciendis tenetur ullam sint ut architecto saepe id.</p>
</div>


<?php 

$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi doloremque debitis consequuntur? Consequuntur eveniet dolorum ullam, quis, quidem culpa placeat doloribus numquam ut quam, fugit praesentium neque nemo. Vero, ea.";
$integer = 10;
$float = 3.14;
$boolean = false;

echo '<br/>';
echo $integer;
echo '<br/>';
echo $float;
echo '<br/>';
echo $boolean;
echo '<br/>';

$a = 10;
$b = 3;

echo $a + $b; // sobiranje
echo '<br/>';
echo $a - $b; // odzemanje
echo '<br/>';
echo $a * $b; // mnozhenje
echo '<br/>';
echo $a / $b; // delenje
echo '<br/>';
echo $a % $b; // modul
echo '<br/>';


function foo($a, $b){
	return $a + $b;
}

echo foo(3, 10);

function ubav_den($den){
	if(strlen($den) % 2 == 1){
		return 'Ubav den';
	} else {
		return 'Losh den';
	}
}

echo '<br/>';
echo ubav_den("ponedelnik"); // losh den (10 karakteri)
echo '<br/>';
echo ubav_den("vtornik"); // ubav den (7 karakteri)
echo '<br/>';

$c = 8;
$d = 75;
$e = 92;

if($c == $d && $e % 2 == 0 || $c + $e == 100){
	echo "Vistina";
} else {
	echo "Nevistina";
}

echo '<br/>';

// nevistina 3 
// vistina 4

// true && true = true
// true && false = false
// false && false = false
// false && true = false

// true || false = true
// false || true = true
// true || true = true
// false || false = false


$broj = 2;
$karakter = '2';

if($broj == $karakter){ // sporedba samo po vrednost
	echo 'Broj == Karakter';
} else {
	echo 'Broj != Karakter';
}

echo '<br/>';

if($broj === $karakter){ // sporedba i po tip i po vrednost
	echo 'Broj == Karakter';
} else {
	echo 'Broj != Karakter';
}

echo '<br/>';


$jazik = 'c++';

switch($jazik){
	case 'php':
		echo 'znam php';
		break;
	case 'javascript':
		echo 'znam javascript';
		break;
	default:
		echo 'nepoznat jazik';
		break;
}

echo '<br/>';

for($i = 1; $i < 100; $i++){
	if($i % 2 == 0){
		echo $i.'<br/>'; // . sluzhi za konkatenacija (spojuvanje)
		// echo '<br/>';
	}
}

echo '<br/>';

// while 1 -> 100, sekoj tret neparen broj


$i = 0;
$counter = 0;

while($i < 100){
	if($i % 2 == 1){
		$counter++;
		if($counter == 3){
			$counter = 0;
			echo $i.', ';
		}
	}
	$i++;
}

echo '<br/>';

$niza = ['pero', 'janko', 'stanko'];
$br = count($niza);

foreach ($niza as $index => $value) {
	echo $index.' = '.$value.'<br/>';
}

echo '<br/>';

foreach ($niza as $value) {
	echo $value.'<br/>';
}
















?>