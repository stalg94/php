<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$homepage = file_get_contents("text");
$homepage .= " еще однв строка";
$date = date("Y-m-d-H-i-s");
file_put_contents($date. ".txt", $homepage);






?>
</body>
</html>
