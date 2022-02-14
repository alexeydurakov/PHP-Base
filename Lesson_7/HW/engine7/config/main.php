<?php

/* Файл констант. */
define('TEMPLATES_DIR', '../views/');
define('LAYOUTS_DIR', 'layouts/');
define('IMG_DIR', '/img/');
define('MODULES_DIR', '../engine/modules/');

/* DB config. */
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'geekbrains');

const ERR_CODE = [
    null => "",
    "OK" => "Отзыв добавлен!",
    "DELETED" => "Отзыв удален!",
    "ERROR_ADD" => "Ошибка добавления отзыва!",
    "ERROR_DEL" => "Ошибка удаления отзыва!",
    "ERROR_UPDATE" => "Ошибка изменения отзыва!",
    "UPDATED" => "Отзыв изменен!"
];

// Подключим основные функции-модули приложения.
require_once "../engine/lib_autoload.php";


