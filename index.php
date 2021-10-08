<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$num=5;
if ($num >0 && $num<8){
    echo "0<{$num}<8";
}
echo "<br>";
$num1=5;
if ($num1 >0 || $num1<8){
    echo "условие сработало";
}
echo "<br>";
$num2=-9;
if (!($num2 >0)){
    echo "условие сработало";
}

?>
</body>
</html>
