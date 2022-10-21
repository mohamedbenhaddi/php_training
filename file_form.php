
<?php
if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    var_dump($_FILES['img']);

}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" value="go">
</form>

--------------------------------------------

<?php
if(isset($_FILES['img']) && $_FILES['img']['error'] === UPLOAD_ERR_OK) {
    // var_dump($_FILES['img']);
  //basename permet de recuperer seulement le nom du fichier
    $filename = basename($_FILES['img']['name']);

    if(move_uploaded_file($_FILES['img']['tmp_name'], "img/$filename")){
        echo 'Envoi réussi';
    }
    else {
        echo 'envoi echoué';
    }
}
?>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="img">
    <input type="submit" value="go">
</form>

--------------------------------------------
