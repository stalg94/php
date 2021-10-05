<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>
<body>
<?php

echo "Текущая дата и время: ";
echo "<br>";
echo  date(DATE_RSS);

echo "<br>"
?>
<?php
if (mt_rand(0,1)){?>
<div style="color: blue">Синий текст</div>
    <?php
}
else{?>
<div style="color: red">Красный текст</div>
<?php
}
?>
</body>
</html>
