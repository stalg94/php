<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$i = 0;
while ($i <=10){
    $i++;
    if ($i<4) continue;
    if ($i>5) break;
    echo "$i <br>";
}

?>
</body>
</html>
