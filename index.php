<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
// пример неявного приведения типов, типы данных разные, но интерпритатор все понимает
$str   ="45.2";
$number = $str - 12;
echo $number;
echo "<br>";

$var = 0.0;
if ($var){
    echo "Переменная $var рассматривается как true <br>";
}
else   {
    echo "Переменная $var рассматривается как false<br>";
}
//преобразование к другому типу
$float = 4.3;
$number = (int)$float;
echo $number;
echo "<br>";

$num=21;
$f= (float)($num/2) - (int)($num/2);
if($f){
    echo "paaritu <br>";
}else{
    echo "paaris <br>";
}




?>
</body>
</html>
