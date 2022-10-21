<?php declare(strict_types = 1);


$post = [

    'title' => 'titre mis a jour',
    'body' => 'corps mis a jour',
];



$pdo = new PDO('mysql:host=localhost;dbname=php','root','');

$req = $pdo->prepare('DELETE FROM posts WHERE id = ?');
$req->bindValue(1, 5, PDO::PARAM_INT);
$req->execute();

