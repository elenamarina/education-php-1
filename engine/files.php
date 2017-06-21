<?php
function getFilesFromDir($dirName)
{
    $files = scandir($dirName);
    foreach ($files as $key => $file) {
        if (!is_file($dirName . "/" . $file)) {
            unset($files[$key]);
        }
    }
    return $files;
}

function getFilesFromDb($conn){
    $res=mysqli_query($conn, "SELECT * FROM gallery.picture");
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function uploadImg(){
    if (file_exists($_FILES['file'] ['tmp_name'])){
        $fileName = PUBLIC_DIR . "img/" . iconv('windows-1251', 'utf-8', $_FILES['file'] ['name']);
        move_uploaded_file($_FILES['file']['tmp_name'], $fileName);
        return $_FILES['file']['name'];
    }
    return false;
}