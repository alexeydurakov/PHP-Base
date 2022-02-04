<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_BIG", ROOT . 'gallery_img/big');
define("IMG_SMALL", ROOT . 'gallery_img/small');

include "classSimpleImage.php";

if (isset($_POST['load'])){
    $path_big = IMG_BIG. $_FILES["image"]["name"];
    $path_small = IMG_SMALL. $_FILES["image"]["name"];


//Проверка содержания файла изображения
    $imageinfo = getimagesize($_FILES['image']['tmp_name']);

    if($imageinfo['mime'] != 'image/gif' && $imageinfo['mime'] != 'image/jpeg'  && $imageinfo['mime'] != 'image/png') {
        echo "Загрузуа gif, jpeg, png\n";
        exit;
    }
//Проверка расширения загружаемого файла
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if(preg_match("/$item\$/i", $_FILES['image']['name'])) {
            echo "We do not allow uploading PHP files\n";
            exit;
        }
    }

    if(move_uploaded_file($_FILES["image"]["tmp_name"], $path_big)){

        $image = new SimpleImage();
        $image->load($path_big);
        $image->resizeToWidth(150);
        $image->save($path_small);

        header("Location: /");
    }else{
        echo "Ошибка<br>";
        die();
    }
}


function getGallery($path){
    $scandir = scandir($path);
    return array_splice($scandir,2);
}

$images = getGallery(IMG_BIG);

?>

<!DOCTYPE html>
<head>
<meta charset="UTF-8">
<title>Моя галерея</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
<script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript">
	$(document).ready(function(){
		$("a.photo").fancybox({
			transitionIn: 'elastic',
			transitionOut: 'elastic',
			speedIn: 500,
			speedOut: 500,
			hideOnOverlayClick: false,
			titlePosition: 'over'
		});	}); </script>

</head>

<body>
<div id="main">
<div class="post_title"><h2>Моя галерея</h2></div>
	<div class="gallery">
        <?php foreach ($images as $filename): ?>
            <a rel="gallery" class="photo" href="gallery_img/big/<?=$filename?>"><img
                        src="gallery_img/small/<?=$filename?>" width="150"/></a>
        <?php endforeach; ?>
    </div>
    Загрузить изображение:
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" value="Загрузить" name="load">
        </form>


</div>

</body>
</html>
