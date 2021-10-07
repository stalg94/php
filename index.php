<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php

echo "Имя файла " . __FILE__ . "<br>";//каталог и название файла, в котором написан скрипт
echo  "Строка ". __LINE__ . "<br>"; // показывает номер строки, где произошел ее вызов
echo "Путь к файлу " . __DIR__ . "<br>"; // показывает абсолютный путь
//require_once __DIR__. "point.php";

class ConstClass{
    const NAME = "str"; //в классе константа создается при помощи функции const
}
 if (defined("ConstClass::NAME")){
     echo "Константа определена";
 }
 else{
     echo "не определена!";
 }




?>
</body>
</html>
