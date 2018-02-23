<?php 

header('Content-Type: text/html; charset=utf-8');

if(isset($_POST['text']) && strlen(trim($_POST['text'])) > 0){

	$lat = ['a', 'b', 'v', 'g', 'd', ']', 'e', '\\', 'z', 'y', 'i', 'j', 'k', 'l', 'q', 'm', 'n', 'w', 'o', 'p', 'r', 's', 't', "'", 'u', 'f', 'h', 'c', ';', 'x', '[', 'A', 'B', 'V', 'G', 'D', '}', 'E', '|', 'Z', 'Y', 'I', 'J', 'K', 'L', 'Q', 'M', 'N', 'W', 'O', 'P', 'R', 'S', 'T', '"', 'U', 'F', 'H', 'C', ':', 'X', '{'];

	$cyr = ['а', 'б', 'в', 'г', 'д', 'ѓ', 'е', 'ж', 'з', 'ѕ', 'и', 'ј', 'к', 'л', 'љ', 'м', 'н', 'њ', 'о', 'п', 'р', 'с', 'т', 'ќ', 'у', 'ф', 'х', 'ц', 'ч', 'џ', 'ш', 'А', 'Б', 'В', 'Г', 'Д', 'Ѓ', 'Е', 'Ж', 'З', 'Ѕ', 'И', 'Ј', 'К', 'Л', 'Љ', 'М', 'Н', 'Њ', 'О', 'П', 'Р', 'С', 'Т', 'Ќ', 'У', 'Ф', 'Х', 'Ц', 'Ч', 'Џ', 'Ш'];

	$output = '';

	switch($_POST['convert']){
		case 'c2l':
			$output = str_replace($cyr, $lat, $_POST['text']);
			break;
		case 'l2c':
			$output = str_replace($lat, $cyr, $_POST['text']);
			break;
	}

	echo $output;

} else {
	echo "Please enter some text to convert";
}

?>