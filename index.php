<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<a href='test.php?phrase=".urlencode("Привет, мир!")."'>Ссылка</a>";

$url= "http://user:pass@www.site.ru/path/index.php?par=value#anch";
echo "<pre>";
print_r(parse_url($url));
echo "</pre>";

/*при использовании GET данные (чаще значение параметров) прикрепляются к URI ресурса.
Если в отображаемом URL страницы в конце присутствует знак вопроса и затем идет перечисление пар «параметр-значение», разделенных знаком амперсанда, то используется GET.*/

?>
</body>
</html>
