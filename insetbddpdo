<?php declare(strict_types = 1);

if(!empty($_POST)){

    $pdo = new PDO('mysql:host=localhost;dbname=php','root','');

    $req = $pdo->prepare('INSERT INTO posts (img, title, body, reading_time) VALUES (:img, :title, :body, :reading_time)');
    $req->bindParam(':img', $_POST['img']);
    $req->bindParam(':title', $_POST['title']);
    $req->bindParam(':body', $_POST['body']);
    $req->bindValue(':reading_time', ceil(str_word_count($_POST['body']) / 238), PDO::PARAM_INT);
    $req->execute();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="img" placeholder="Image">
        <input type="text" name="title" placeholder="titre">
        <textarea name="body" placeholder="Corps de l'article"></textarea>
        <input type="submit" value="Go!">
    </form>

</body>
</html>
