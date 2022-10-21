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

//prepare

$id = 2;
$pdo = new PDO('mysql:host=localhost;dbname=php','root','');

$posts = $pdo->prepare('SELECT * FROM posts WHERE id = :id');
$posts->bindParam(':id', $id, PDO::PARAM_INT);

$posts->execute();

var_dump($posts->fetch(PDO::FETCH_ASSOC));
