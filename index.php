<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
if (define("NUMBER",1)){
    echo "COnst NUMBER успешно создана!";
}if (defined("NUMBER")){
    echo "COnst NUMBER уже создана 4!";
}

define ("NUMBERS",2);
echo  constant("NUMBERS");
//define("NUMBER",1);//запись константы
//echo NUMBER;


$num=mt_rand(1,10);
$name = "VALUE($num)";
define($name, $num);
echo constant($name);


?>
</body>
</html>
