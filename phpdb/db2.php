<?php 

$username = 'root';
$password = 'root';
$host = '127.0.0.1';
$dbname = 'blog';

// dsn - data source name
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

// PDO - php data object
$DB = new PDO($dsn, $username, $password);

$isValid = 	isset($_POST['category'])
			&& $_POST['category'] != '';

if($isValid) {
	$sql = 'insert into categories (category) values (:category)';
	$query = $DB->prepare($sql);
	$query->bindValue(':category', $_POST['category'], PDO::PARAM_STR);
	$query->execute();
}

$sql = "select * from categories";
$query = $DB->query($sql);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<form action="db2.php" method="post">
	<input type="text" name="category" placeholder="category">
	<button type="submit"> Save </button>
</form>

<table border="1" width="80%">
	<tr>
		<th>id</th>
		<th>category</th>
	</tr>
	<?php foreach($res as $row){ ?>
	<tr>
		<td><?=$row['id'];?></td>
		<td><?=$row['category'];?></td>
	</tr>
	<?php } ?>
</table>