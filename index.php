<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<form method="get">
    <input type="text" name="first"><br>
    <input type="text" name="second"><br>
    <input type="submit" value="Отправить"><br>
</form>
<?php
if (empty($_GET["first"])&& empty($_GET["first"])){
    exit("Текстовые поля не заполнены");
}else{
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
}

?>
</body>
</html>
