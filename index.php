<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php

$arr["one"]=14;
echo "Tekst $arr[one] ja veel tekst<br>"; //при интерполяции здесь доп кавычки не требу.тся
//преобразование элементов массива в простые элементы
$arr1=[1,2,3];
list($one,$two,$three)= $arr1;
echo $one."<br>";
echo $two."<br>";
echo $three."<br>";

$x = 6;
$y=3;
echo "enne:<br>";
echo "x: $x<br>";
echo "y: $y<br>";

list($t,$x)= [$x,$y];
echo "pärast:<br>";
echo "x: $x<br>";
echo "y: $y<br>";

?>
</body>
</html>
