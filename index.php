<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$user = "Ivan";

if (isset($user)) //позволяет проверить, есть ли какое-то значение  у функции или нет
    echo "Переменная существует <br>";
else
    echo "переменная отсутвует <br>";

$str= "";
if (empty($str)) // empty проверяет на пустоту какой-то переменной
    echo "строка пустая <br>";
else
    echo "в строке чтото есть <br>";

// как узнать тип переменных:
echo gettype("wdf");
echo "<br>";

//как узнать, число это или нет:
if (is_int(12342))
    echo "See on arv <br>";
else
    echo "ei ole arv <br>";




?>
</body>
</html>
