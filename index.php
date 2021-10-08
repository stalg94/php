<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
for ($i=0, $j=5; $i<5, $j>0; $i++,$j--){
    echo "$i - $j<br>";
    }
echo "<br>";
for ($y=5; $y>0; $y--){
    echo "$y <br>";
}

echo "<br>";
for ($a=2; $a<100; $a++){
    for ($b = 2; $b<$a;$b++){
        if (($a%$b)!= 0){
            continue;
        }else{
            $flag = true;
            break;
        }
    }
    if (!$flag) echo "$a ";
    $flag = false;
}
?>
</body>
</html>
