<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
require "point.php";

$point1 = new Point;
$point1->x = 13; //"обращение к элементам данного класса"
$point1->y = 2;
echo $point1->x;
$point2 = new Point;
$point2->x = 11; //"обращение к элементам данного класса"
$point2->y = 47;
echo $point2->x;

// объект можно самостоятельно удалить при помощи:
unset($point2);
//echo $point2->x;

echo  Point::$num; // вывод заданной в классе постоянной переменной

$first= new Point();
$first->x=3;
$first->y=3;

$second= clone $first;
$second->x=5;
$second->y=5;

echo "<br>";
echo "x: {$first->x}, y: {$first->y}";
echo "<br>";
echo "x: {$second->x}, y: {$second->y}";

pow(2,8);

$p1= new Point();
$p1->x=10;
$p1->y=34;

$p2= new Point();
$p2->x=3;
$p2->y=10;

$distance=sqrt((pow(($p2->x-$p1->x),2))+(pow(($p2->y-$p1->y),2)));
echo "<br>$distance";


?>
</body>
</html>
