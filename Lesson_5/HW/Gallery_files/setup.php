<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_BIG", ROOT . "/Lesson_5/HW/Gallery_files/gallery_img/big/");

include "db.php";

$result = mysqli_query($db,  "SELECT id FROM images_file_name");

if ($result->num_rows == 0) {
    echo "пусто";
    $images = array_splice(scandir(IMG_BIG),2);
    mysqli_query($db,"INSERT INTO images_file_name(filename) VALUES ('" . implode("'),('", $images) . "')");
} else {
    echo "заполненно";
}