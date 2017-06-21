<?php
$path='i/';
$tmp_path='tmp/';
$types=array('image/gif', 'image/png', 'image/jpg');
$size=1024000;

// Загрузка и проверка файла
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (!in_array($_FILES['picture']['type'], $types))
    die('Запрещенный тип файла. <a href="?">Попробывать другой файл?</a>');

    if ($_FILES['picture']['size'] > $size)
    die('Слишком большой размер файла. <a href="?">Попробывать другой файл?</a>');

    if (!@copy($_FILES['picture'] ['tmp_name'], $path. $_FILES ['picture'] ['name']))
        echo 'что-то пошло не так';
    else
        echo 'Загрузка удачна <a href=" ' .$path .$_FILES['picture']['name'] . ' ">Посмотреть</a>';

}

//Вывод  картинок
function getFilesFromDir($dirName){
    $files = scandir($dirName);
    foreach ($files as $key => $file ){
        if (!is_file($dirName. "/" . $file)){
            unset($files[$key]);
        }
    }
    return $files;
}

$images=getFilesFromDir('image');
foreach ($images as $image){
    echo "<img src='/image/{$image} ' width='200'>";
}

?>
<!Doctype html>
<html xmlns="http://www.w3.org/1999/html">
<meta charset="UTF-8">
<head>
<title>Марина Елена домашняя работа 4 </title>
</head>
<body>
    <p>Форма для загрузки файлов</p>
    <form action="homework4.php" method="post"  enctype="multipart/form-data">
        <input type="file" name="filename"> <br></form>
</body>
</html>


