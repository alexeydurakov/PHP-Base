<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label>Переменная 1:</label>
        <input type="number" name="var1">
        <label>Переменная 2:</label>
        <input type="number" name="var2">

        <div style="owerflow: hidden">
        <input type="submit" name="operation" value="+" style="clear: both; float: left; padding: 2px">
        <input type="submit" name="operation" value="-" style="float: left; padding: 2px; margin: 2px">
        <input type="submit" name="operation" value="*" style="clear: both; float: left; padding: 2px">
        <input type="submit" name="operation" value="/" style="float: left; padding: 2px; margin: 2px">
        </div>
    </form>

<?php
$a=(int)$_POST['var1'];
$b=(int)$_POST['var2'];
if(isset($_POST['operation'])){
    if($a===""||$b===""){
        $result = "введите корректные значения";
    }
    else{
        switch ($_POST['operation']){
            case '+':
                $result=$a+$b;
                break;
            case '-':
                $result=$a-$b;
                break;
            case '*':
                $result=$a*$b;
                break;
            case '/':
                if($b==0){
                    $result= "деление на ноль";
                }
                else {
                    $result=$a/$b;
                }
                break;
            default:
                $result="что то не так____";
                break;
        }
    }
}
?>
<div style="clear: both; font-weight: bold; font-size: 16px">Результат: <?=$result?></div>
</body>
</html>

