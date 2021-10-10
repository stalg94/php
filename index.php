<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
//рекурсия - функция вызывает саму себя
function recuriya($counter){
    if ($counter > 0){
        echo ($counter--)."<br>";
        recuriya($counter);
    }else return;
}
recuriya(8);

function outter(){
    function inner(){
        return "Hello World!";
    }
}
outter();
echo inner();

function first(){
    return  "First function";
}
function second(){
    return "Second function";
}

$newFunction = rand(0,1) ? "first": "second";

echo $newFunction();
class Point
{
    public $x; //public - доступна как снаржуи так и внутри
    public $y;
}

$fst  = new Point();
$fst ->x = 12;
$fst ->y = 5;

$snd = new Point();
$snd->x = 1;
$snd->y = 1;

$thd= new Point();
$thd->x = 4;
$thd->y = 10;

$arr = [$fst,$snd,$thd];
usort($arr,function ($a,$b){
   $dist_a = sqrt($a -> x**2+ $a -> y**2);
   $dist_b = sqrt($b -> x**2+ $b -> y**2);
   return $dist_a <=> $dist_b;
});
echo  "<pre>";
print_r($arr);
echo "/<pre>";

?>
</body>
</html>
