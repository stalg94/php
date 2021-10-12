<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>

<?php
$errors=[];
if (!empty($_POST)){
    if (empty($_POST["first"])){
        $errors[]= "Текстовое поле не заполнено";
    }
    if (empty($errors)){
        echo htmlspecialchars($_POST["first"]);
        exit();
    }
}
if (!empty($errors)){
    foreach ($errors as $err) {
        echo "<span style='color:red'>$err</span><br>";
    }
}
?>
<form method="post">
    <input type="text" name="first" value="<?php htmlspecialchars($_POST['first'],ENT_QUOTES); ?>">
    <br>
    <input type="submit" value="Отправить">
</form>
</body>
</html>