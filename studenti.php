<?php 

header('Content-Type: text/html; charset=utf-8');

$MAX = 0;
$MIN = 1000;
$MAX_INDEX = 0;
$MIN_INDEX = 0;

$count = count($_POST['firstname']);

for($i = 0; $i < $count; $i++){
	if($_POST['average'][$i] > $MAX){
		$MAX = $_POST['average'][$i];
		$MAX_INDEX = $i;
	}

	if($_POST['average'][$i] < $MIN){
		$MIN = $_POST['average'][$i];
		$MIN_INDEX = $i;
	}
}

echo $MIN;
echo '<br/>';
echo $MAX;

?>

<table border="1" width="100%">
	<tr>
		<th></th>
		<th>Име</th>
		<th>Презиме</th>
		<th>Просек</th>
	</tr>
	<tr>
		<th>Највисок просек</th>
		<td><?=$_POST['firstname'][$MAX_INDEX] ?></td>
		<td><?=$_POST['lastname'][$MAX_INDEX] ?></td>
		<td><?=$_POST['average'][$MAX_INDEX] ?></td>
	</tr>
	<tr>
		<th>Најнизок просек</th>
		<td><?=$_POST['firstname'][$MIN_INDEX] ?></td>
		<td><?=$_POST['lastname'][$MIN_INDEX] ?></td>
		<td><?=$_POST['average'][$MIN_INDEX] ?></td>
	</tr>
</table>