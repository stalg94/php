<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
    <style>
        img{
            width: 150px;
            length:200px;
            display: block;
        }
    </style>
</head>  <!-- comment ctrl+/ -->
<body>
<img src="Liverpool.png" alt="pilt">
Форма для загрузки файлов<br>
<form method="post" action="script.php" enctype="multipart/form-data"> <!--без multipart form data файл передать не сможем-->
    <input type="file" name="filename" size="">
    <input  type="submit" value="Отправить">
</form>
</body>
</html>
