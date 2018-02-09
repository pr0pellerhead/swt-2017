<?php 

$iminja = [
	'janko',
	'pero',
	'stanko',
	'aleksandar',
	'ivan',
	'kostadinka',
	'gorjan',
	'boris',
	'snezhana',
	'petar',
];

foreach($iminja as $i){
	if(strlen($i) > 7){
		echo $i.', ';
	}
}

echo '<br/>';

$student = [ // низа
	'Bojan', 
	'Gavrovski', 
	6.4
];

// echo $student[0];
echo '<br/>';



$student = [ // асоцијатвивна низа
	'ime' => 'Bojan', 
	'prezime' => 'Gavrovski', 
	'prosek' => 6.4
];

echo '<br/>';
echo $student['ime'].' '.$student['prezime'];
echo '<br/>';
echo $student['prezime'];
echo '<br/>';

foreach ($student as $k => $v) {
	echo $k.'<br/>';
	echo $v.'<br/>';
}

echo '<br/>';


/*******************/

echo '<ul>';

foreach ($student as $k => $v) {
	// echo '<li>';
	// echo '<b>'.$k.': </b>';
	// echo $v;
	// echo '</li>';

	echo '<li><b>'.$k.': </b>'.$v.'</li>';
}

echo '</ul>';
?>




<ul>

<?php foreach($student as $k => $v){ ?>
	<li>
		<b>
		<?=$k?>:
		</b>
		<?=$v?>
	</li>
<?php } ?>

</ul>














<ul>
	<?php foreach ($student as $k => $v) { ?>
		<li>
			<b><?=$k ?>: </b>
			<?=$v ?>
		</li>
	<?php } ?>
</ul>








<ul>
	<li>
		<b>Ime: </b>
		Bojan
	</li>
	<li>
		<b>Prezime: </b>
		Bojanovski
	</li>
	<li>
		<b>Prosek: </b>
		10.00
	</li>
</ul>


<?php 

echo '<br/>';

$studenti = [
	['Pero', 'Perovski'],
	['Ivan', 'Ivanovski'],
	['Janko', 'Jankovski']
];

echo $studenti[1][1];
echo $studenti[2][0];
echo $studenti[0][1];

echo '<br/>';

$studenti = [
	['ime' => 'Pero', 'prezime' => 'Perovski'],
	['ime' => 'Ivan', 'prezime' => 'Ivanovski'],
	['ime' => 'Janko', 'prezime' => 'Jankovski']
];

echo $studenti[1]['prezime'];
echo $studenti[2]['ime'];
echo $studenti[0]['prezime'];

echo '<br/>';


?>

<table border="1">
	<tr>
		<?php foreach($studenti[0] as $k => $v){ ?>
			<th><?=$k?></th>
		<?php } ?>
	</tr>
	<?php foreach($studenti as $student){ ?>
	<tr>
		<td><?=$student['ime']; ?></td>
		<td><?=$student['prezime']; ?></td>
	</tr>
	<?php } ?>
</table>

<?php 

$link = ['url' => 'https://google.com', 'text' => 'Google'];

$l = '<a href="'.$link['url'].'">'.$link['text'].'</a>';

$l2 = "<a href=\"".$link['url']."\">";


?>

<a href="<?=$link['url']?>"><?=$link['text']?></a>
<a href="#">test</a>

<?=$link['url']?>