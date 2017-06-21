<?php
header("content-type: text/html; charset=utf-8");
require_once $_SERVER['DOCUMENT_ROOT'] . "/config/main.php";
require_once ENGINE_DIR . "files.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST' and !empty($_FILES)) {
$fileName = uploadImg();
    $coon=mysqli_connect('localhost', 'root', '', 'gallery');
    mysqli_query($coon, "INSERT INTO picture (path, name) VALUES ('{$fileName}' '{$fileName}')");

}

$images=getFilesFromDb($coon);
foreach ($images as $image){
    echo "<a target='_blank' href='photo.php?id={$image['id']}}'><img src='public/img/{$image['path']}' width='100'></a>";
}

?>

<form action="" enctype="multipart/form-data" method="post">
    <input type="file" name="file">
    <input type="submit">
</form>
