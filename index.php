<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$str = "Hello world";
echo $str[0]."<br>";
$str1 = "Привет мир!";
echo mb_strlen($str1)."<br>"; // подсчет количества символов
// вывод строки посимвольно
for ($i=0; $i < strlen($str); $i++){
    echo $str[$i]."<br>";
}
chr(36)




?>
</body>
</html>
