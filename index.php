<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<form action="handler.php" method="post">
    Сообщение: <br>
    <textarea name="msg" cols="50" rows="5"></textarea><br>
    <input type="submit" name="Lisada">
</form>
<?php
$str= "<p>Обычный текст</p><br>
<br>Жирный текст</br>";
echo htmlspecialchars(strip_tags($str));//удаляет все html теги, чтобы был обычный текст
printf("Первое число - %d",26);
echo "<br>";
$red=255;
$green=255;
$blue= 100;
printf("#%X%X%X",$red,$green,$blue);
echo "<br>";
$dtr="Имя, Фамилия, e-mail";
echo "<pre>";
print_r(explode(", ",$dtr,3));//разбивает стрку на массив с определенным разделителем и кол-ом элементов (3)
echo "</pre";
$arr=["Имя","Фамилия","e-mail","Номер"];
echo implode(", ",$arr); //делаем из массива строку






?>
</body>
</html>
