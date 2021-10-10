<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
function sum(int $a,int $b): int {
    return $a+$b;
}

echo sum(2,3);

function outArguments(...$items){//аргумент items рассматривается как массив
    foreach ($items as $arg){
        echo "$arg<br>";
    }
}
outArguments("PHP","JS","C++","Python");

function outArgument($a,$b,$c,$d){
    echo "$a<br>";
    echo "$b<br>";
    echo "$c<br>";
    echo "$d<br>";
}
$item  = ["PHP","JS","C++","Python"];
outArgument(...$item);

function sums(){
    global $var;
    $var=2;
    return $var;
}

$var = 6;
echo sums();
echo "<br>$var<br>";

function statics(){
    static $count=0; //за счет static данная переменная помнит свое предыдущее значение
    return ++$count;
}
echo statics()."<br>";
echo statics()."<br>";
echo statics()."<br>";
echo statics()."<br>";






?>
</body>
</html>
