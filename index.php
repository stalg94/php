<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
// тернарный - используется три оператора
//выражение1 ? выражение2 : выражение3
//позволяет заменить оператор if при маленьком фрагменте

$n=0;
finish:
$x = -450;
$x= $x < 0 ? -$x : $x;
echo $x;
echo "<br>";
$y = null;
$y = $y ?? 1;
echo $y;
$n++;
if ($n>6){
    goto end;
}
goto finish;
end:




?>
</body>
</html>
