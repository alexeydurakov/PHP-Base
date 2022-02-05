<?php

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_BIG", ROOT . "/Lesson_5/HW/Gallery_files/gallery_img/big/");
define("IMG_SMALL", ROOT . "/Lesson_5/HW/Gallery_files/gallery_img/small/");

include "classSimpleImage.php";

include "db.php";

$result = mysqli_query($db, "SELECT * FROM images_file_name ORDER BY likes DESC ");

if (isset($_POST['load'])){
    include "upload.php";
    } else {
        echo "Ошибка<br>";
        die();
    }



?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<div id="main">
<div class="post_title"><h2>Моя галерея</h2></div>
	<div class="gallery">
        <?php if ($result->num_rows !=0):?>
        <?php foreach($result as $item): ?>
            <a class="photo" href="/image.php?id=<?=$item['id'] ?>">
                <img src="gallery_img/small/<?=$item['filename']?>" width="150" height="100" /></a>
            <?=$item['likes']?>
        <?php endforeach;?>
        <?php else: ?>
            Галерея пуста
        <?php endif; ?>
    </div>
    Загрузить изображение:
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="Загрузить" name="load">
    </form>
</div>

</body>
</html>
