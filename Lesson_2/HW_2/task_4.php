<!--4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), -->
<!--где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. -->
<!--В зависимости от переданного значения операции выполнить одну из арифметических операций -->
<!--(использовать функции из пункта 3) и вернуть полученное значение (использовать switch).-->
<?php

function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case 'add':
            $item = $arg1 + $arg2;
            break;
        case 'reduce':
            $item = $arg1 - $arg2;
            break;
        case 'divide':
            $item = ($arg2 == 0) ? "Ошибка" : $arg1 / $arg2;
            break;
        case 'multiply':
            $item = $arg1 * $arg2;
            break;
    }
    return $item;
}

$a = mt_rand(-99, 100);
$b = mt_rand(-99, 100);

echo "Сумма чисел: " . mathOperation($a, $b, "add") ."<br>";
echo "Разность чисел: " . mathOperation($a, $b, "reduce") ."<br>";
echo "Частное чисел: " . mathOperation($a, $b, "divide") ."<br>";
echo "Произведение чисел: " . mathOperation($a, $b, "multiply");

