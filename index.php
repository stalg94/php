<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$char= "php";
switch ($char) {
    case "php":
        echo "<h1>Язык PHP </h1>";
        break;
    case "js":
        echo "<h1>Язык JavaScript </h1>";
        break;
    case "c#":
        echo "<h1>Язык C# </h1>";
        break;
    default:
        echo "<h1>Неизвестный язык!</h1>";
}
echo "<br>";
$number = 120;
switch (true){
    case ($number > 0 && $number <= 10):
        echo "$number vähem kui 10 ja rohkem kui 0";
        break;
    case ($number > 10 && $number <= 100):
        echo "$number vähem kui 100 ja rohkem kui 10";
        break;
    case ($number > 100 && $number <= 1000):
        echo "$number vähem kui 1000 ja rohkem kui 100";
        break;
    default:
        echo "Tundmatu arv";

}






?>
</body>
</html>
