<?php

/* Файл для автоматической загрузки модулей */

$scandir = scandir(MODULES_DIR);
$lib_file = array_splice($scandir, 2); // Сканируем директорию где хранятся модули

foreach ($lib_file as $file) {
    require_once MODULES_DIR . $file;
}
