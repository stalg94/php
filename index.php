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


?>
</body>
</html>
