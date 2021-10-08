<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php

$char = "php";

if ($char == "php"){
    echo  "<h1>Язык php</h1>";
} elseif ($char== "js"){
    echo "язык JS";
}elseif ($char = "c#"){
    echo "язык JavaScript";
}else{
    echo "Хз какой язык";
}


?>
</body>
</html>
