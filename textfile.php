<?php 

// textfile.php

$fh = fopen('iminja.txt', 'a+');

fwrite($fh, 'Pero');

rewind($fh);

// $iminja = fread($fh, filesize('iminja.txt'));
$iminja = fread($fh, 20);

echo $iminja;

fclose($fh);


?>

<!-- Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe facilis, tenetur quod, pariatur aperiam, ea rerum nihil, quae soluta nemo praesentium culpa! Reiciendis minima, reprehenderit illo molestiae dolore, explicabo eum! xjaskjx asjx askjsaj skakjjkas askasjsa askaskjsa sa -->