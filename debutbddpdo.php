<?php declare(strict_types = 1);

//query

$pdo = new PDO('mysql:host=localhost;dbname=php','root','');

$posts = $pdo->query('SELECT * FROM posts');

//while($post = $posts->fetch(PDO::FETCH_ASSOC)) {

//   echo $post['title'].PHP_EOL;
// }

$posts = $posts->fetchAll(PDO::FETCH_ASSOC);
foreach ($posts as $post) {

    echo $post['title'].PHP_EOL;
}
