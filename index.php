<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$arr=array("Hello","world","!"); //первый способ
echo $arr[1];

echo "<pre>"; //сохраняет абзацы и форматирование
print_r($arr); // вывод массив на экран
echo "</pre>";

$arr1=[5=>"Hello","world",8=>"!"]; //второй способ

echo "<pre>"; //сохраняет абзацы и форматирование
print_r($arr1); // вывод массив на экран
echo "</pre>";

$var= "Hello World!"; // третий способ
$arr2 = (array) $var;
echo "<pre>"; //сохраняет абзацы и форматирование
print_r($arr2); // вывод массив на экран
echo "</pre>";

$arr3 = ["one" =>"1", "two"=>"2"];
echo "<pre>";
print_r($arr3);
echo "</pre>";
echo $arr3["one"];








?>
</body>
</html>
