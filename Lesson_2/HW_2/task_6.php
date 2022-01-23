<!--6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), -->
<!--где $val – заданное число, $pow – степень.-->

<?php
function power($val, $pow) {
    if ($pow == 1) {
        return $val;
    } elseif ($pow < 0) {
        return power(1 / $val, -$pow);
    }
    return $val * power($val, $pow - 1);
}

echo power(2, 0) . "<br>";
echo power(2, -2) . "<br>";
echo power(2, 2);