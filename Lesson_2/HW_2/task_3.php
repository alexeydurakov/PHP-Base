3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать
оператор return. В делении проверьте деление на 0 и верните текст ошибки.
<?php

function add($a, $b) {
    return $a + $b;
}

function reduce($a, $b) {
    return $a - $b;
}

function divide($a, $b) {
    return ($b == 0) ? "Ошибка" : $a / $b;
}

function multiply($a, $b) {
    return $a * $b;
}

$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);


echo "Сумма чисел: " . add($a, $b) ."<br>";
echo "Разность чисел: " . reduce($a, $b) ."<br>";
echo "Частное чисел: " . divide($a, $b) ."<br>";
echo "Произведение чисел: " . multiply($a, $b);