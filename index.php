<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<form method="post" action="checkbox.php">
    <input type="checkbox" name="html" value="1" checked>Я знаком с HTML<br>
    <input type="checkbox" name="css" value="2">Я знаком с CSS<br>
    <input type="checkbox" name="js" value="3">Я знаком с JS<br>
    <input type="checkbox" name="php" value="4">Я знаком с PHP<br>
    <input type="submit" value="Отправить">
</form>
<form method="post" action="select.php">
    <select name="fst[]" multiple size="3">
        <option value="1" selected>Esimene rida</option>
        <option value="2" >Teine rida</option>
        <option value="3" >Kolmas rida</option>
    </select>
    <br>
    <select name="snd">
        <option value="one" >Esimene rida</option>
        <option value="two" >Teine rida</option>
        <option value="three" >Kolmas rida</option>
    </select>
        <input type="submit" value="Отправить">
</form>
<form method="post" action="radio.php">
    <input type="radio" name="mark" value="1">1<br>
    <input type="radio" name="mark" value="2">2<br>
    <input type="radio" name="mark" value="3">3<br>
    <input type="radio" name="mark" value="4" checked>4<br>
    <input type="radio" name="mark" value="5">5<br>
    <input type="submit" value="Отправить">
</form>
<?php


?>
</body>
</html>
