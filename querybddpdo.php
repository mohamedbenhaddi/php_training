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

// exemple moteur de recherche


$posts = [];

if(isset($_GET['q']))
{
    $pdo = new PDO('mysql:host=localhost;dbname=php','root','');
    $posts = $pdo->prepare('SELECT title, body 
                            FROM posts 
                            WHERE title LIKE :q 
                            OR body LIKE :q
                            ORDER BY id DESC');
    $posts->bindValue(':q',"%{$_GET['q']}%");
    $posts->execute();
    $posts = $posts->fetchAll(PDO::FETCH_ASSOC);

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
    <form>
        <input type="text" name="q">

    </form>
    <?php  foreach($posts as $post)
    {
        echo '<h1>' . $post['title'] . '</h1>';
        echo $post['body'];
    }
    
    
    ?>

</body>
</html>
