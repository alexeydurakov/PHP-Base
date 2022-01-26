<!--6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты -->
<!--меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? -->
<!--Попробовать его реализовать. Важное, при желании можно сделать на движке 3. ВАЖНОЕ!-->
<?php
$menuArr = [
    'main menu item 1',
    'main menu item 2' => ['item 1', 'item 2', 'item 3'],
    'main menu item 3' => ['item 4' => ['subpoint 1', 'subpoint 2']]
];

function menuRender($arr)
{

    if (!is_array($arr)) {
        return 'incorrect argument';
    }

    $renderArr[] = '<ul>';
    foreach ($arr as $key => $value) {

        if (is_array($value)) {
            $renderArr[] = '<li>' . $key . menuRender($value) . '</li>';
        } else {
            $renderArr[] = '<li>' . $value . '</li>';
        }
    }
    $renderArr[] = '</ul>';

    return implode($renderArr);
}

echo menuRender($menuArr);
