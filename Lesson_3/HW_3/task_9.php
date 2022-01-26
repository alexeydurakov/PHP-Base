<!--9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит
транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на
основе названия статьи в блогах).-->
<?php

function getStringInLatin($alfabet, $string){
    $result = "";
    for ($i = 0; $i < mb_strlen($string); $i++) {
        $rus_letter = mb_substr($string, $i, 1);

        if (isset($alfabet[mb_strtolower($rus_letter)])) {
            if ($rus_letter === mb_strtolower($rus_letter)) {
                $latin_letter = $alfabet[$rus_letter];
            } else {
                $latin_letter = mb_strtoupper($alfabet[mb_strtolower($rus_letter)]);
            }
        } else {
            $latin_letter = $rus_letter;
        }
        $result .= $latin_letter;

    }
    return $result;
}

function replaceSpace($string){
    $newString = str_replace(' ', '_', $string);
    return $newString;
}

$alfabet = [
    'а' => 'a', 'б' => 'b', 'в' => 'v',
    'г' => 'g', 'д' => 'd', 'е' => 'e',
    'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
    'и' => 'i', 'й' => 'y', 'к' => 'k',
    'л' => 'l', 'м' => 'm', 'н' => 'n',
    'о' => 'o', 'п' => 'p', 'р' => 'r',
    'с' => 's', 'т' => 't', 'у' => 'u',
    'ф' => 'f', 'х' => 'h', 'ц' => 'c',
    'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
    'ь' => ' ', 'ы' => 'y', 'ъ' => ' ',
    'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
];
$string = "А роза упала на лапу Азора";
echo $string . "<br>";
$result_translate = getStringInLatin($alfabet, $string);
$result_fun = replaceSpace($result_translate);
echo $result_translate. "<br>";
echo $result_fun;
