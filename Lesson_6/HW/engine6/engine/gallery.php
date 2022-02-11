<?php

function getImages()
{
    $sql = "SELECT * FROM images_file_name ORDER BY likes DESC";
    $images = getAssocResult($sql);

    return $images;
}

function getFullImage($id)
{
    $id = (int)$id;
    $sql = "SELECT * FROM images_file_name WHERE id = {$id}";
    $image_big = getAssocResult($sql);

    // В случае если изображения нет, вернем пустое значение.
    $result = [];
    if (isset($image_big[0]))
        $result = $image_big[0];

    return $result;
}

function addLike($id)
{
    $sql = "UPDATE images_file_name SET likes = likes + 1 WHERE id = {$id}";
    executeQuery($sql);
}
