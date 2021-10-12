<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>  <!-- comment ctrl+/ -->
<body>
<?php
//class People{
//    private $name;
//    public function __construct(){
//        echo  "Вызов конструктора";
//        $this->name = "Ivan";
//
//
//    }
//}
////$obj = new People();
////echo "<pre>";
////echo print_r($obj);
////echo "</pre>";
class Point
{
    private $x;
    private $y;
    public function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
    public function __toString(){
        return "({$this->x},{$this->y}) ";
    }
}
$obj = new Point(10,20);
echo "<pre>";
echo print_r($obj);
echo "</pre>";

echo "{$obj}";




?>

</body>
</html>
