<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$date ="01.01.2021";
echo "päev ". substr($date,0,2). "<br>";
echo "kuu ". substr($date,3,2). "<br>";
echo "aasta ". substr($date,6). "<br>";




?>
</body>
</html>
