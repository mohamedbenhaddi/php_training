<?php
if(!empty($_POST))
{
    extract($_POST);
}

var_dump($name, $message);
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
    
<form method="post">
    <input type="text" name="name" value="<?= $name ?? '' ?>">
    <input type="text" name="message" value="<?= $message ?? '' ?>">
    <input type="submit" value="go">
</form>
</body>
</html>
