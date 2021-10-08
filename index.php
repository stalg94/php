<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
//операторы сравнения, возвращают либо true либо false

$x = 1;
$y = "2";

echo $x < $y;
echo $x <= $y;
echo $x > $y;
echo $x >= $y;

echo $x == $y; //сравнение переменных без учета их типа
echo $x != $y; //не равно
echo $x <> $y;
echo $x === $y; //проверяют полностью на равенство переменныъ
echo $x !== $y;

echo $x <=> $y; //возвращает числовое значение



?>
</body>
</html>
