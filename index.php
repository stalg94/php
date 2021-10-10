<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$first = [1=>"red", 2=>"blue"];
$second = [3=>"brown", 4=>"green"]; //если не указывать результирующие индексы, элементы в новый массив вписаны не будут
$con = $first  + $second;
$con1= array_merge($first,$second);
$first1 = ["red", "blue"];
$second1 = ["brown","green"];

echo "<pre>";
print_r($con);
echo "</pre>";
echo "<pre>";
print_r($con1);
echo "</pre>";

if ($first == $second){
    echo "Massiivid on võrdsed <br>";
}else  {
    echo "Maasiivid ei ole võrdsed <br>";
}


?>
</body>
</html>
