<?php

include "db.php";

$path_big = IMG_BIG . $_FILES["image"]["name"];
$path_small = IMG_SMALL . $_FILES["image"]["name"];


//    Проверка содержания файла изображения
$imageinfo = getimagesize($_FILES['image']['tmp_name']);

if($imageinfo['mime'] != 'image/png' && $imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg') {
    echo "Sorry, we only accept PNG, GIF and JPEG images\n";
    exit;
}
//    Проверка расширения загружаемого файла
$blacklist = array(".php", ".phtml", ".php3", ".php4");
foreach ($blacklist as $item) {
    if(preg_match("/$item\$/i", $_FILES['image']['name'])) {
        echo "We do not allow uploading PHP files\n";
        exit;
    }
}

if(move_uploaded_file($_FILES["image"]["tmp_name"], $path_big)) {

    $filename = mysqli_real_escape_string($db, $_FILES['image']['name']);
    mysqli_query($db, "INSERT INTO images_file_name (filename) VALUES ('$filename')");

    $image = new SimpleImage();
    $image->load($path_big);
    $image->resizeToWidth(150);
    $image->save($path_small);

    header("Localhost: /");
}