<?php

include "db.php";

$id = (int)$_GET['id'];
mysqli_query($db, "UPDATE images_file_name SET likes = likes + 1 WHERE id = {$id}");
$result = mysqli_query($db, "SELECT * FROM images_file_name WHERE id = {$id}");
$message = "";
if ($result->num_rows !=0) $item =mysqli_fetch_assoc($result);
else $message = "Изображения не в бд";

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Моя галерея</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="main">
    <a href="/">Главная</a>
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php if (empty($message)): ?>
            Просмотров:<?=$item['likes']?>
            <img src="gallery_img/big/<?=$item['filename']?>">
        <?php else: ?>
            <div style="color: red"><?= $message?></div>
        <?php endif; ?>
    </div>
<!--    Загрузить изображение:-->
<!--    <form method="post" enctype="multipart/form-data">-->
<!--        <input type="file" name="image">-->
<!--        <input type="submit" value="Загрузить" name="load">-->
<!--    </form>-->
</div>

</body>
</html>
