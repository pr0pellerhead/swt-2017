
<?php 
$username = 'root';
$password = '';
$host = '127.0.0.1';
$dbname = 'blog';

$dsn = 'mysql:host='.$host.';dbname='.$dbname;

$db = new PDO($dsn, $username, $password);

// mysql:root@127.0.0.1:3306/blog


$sql_posts = 'select * from posts'; // SQL
$posts = $db->query($sql_posts); // SQL
$posts->execute(); // WORK
$res_posts = $posts->fetchAll(PDO::FETCH_ASSOC); // DATA


$sql_add_post = "insert into posts (title, content) values (:title, :content)"; // SQL
$add_p = $db->prepare($sql_add_post); // SQL
$add_p->bindValue(':title', 'Lesi se vraca kuci'); // SQL
$add_p->bindValue(':content', 'Av av av av ....'); // SQL

$add_p->execute(); // WORK

$res_p = $add_p->fetchAll(PDO::FETCH_ASSOC); // DATA


// $sql_users = 'select * from users';
// $users = $db->query($sql_users);
// $users->execute();
// $res_users = $users->fetchAll(PDO::FETCH_ASSOC);


?>