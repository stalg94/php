<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$tests = array(
        "42",
    1337,
    0x539,
    02471,
    0b10100111001,
    1337e0,
    "0x539",
        "02471",
    "0b10100111001",
    "not numeric",
    array(),
    9.1,
    null
);

foreach ($tests as $element) {
    if (is_numeric($element)){
        echo var_export($element, true). " - arv", PHP_EOL . "<br>";
    }    else  {
        echo  var_export($element, true). " - ei ole arv", PHP_EOL . "<br>";
    }
}
// округление
echo round(21.23435478932, 2);

echo ceil(4.3); //5
echo ceil(9.999); //10

echo floor(4.3); // 4
echo floor (9.999); //9

?>
</body>
</html>
