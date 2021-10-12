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
//class Hello {
//    public  function printText(){
//        return "Hello world!";
//    }
//}
//$obj= new Hello();
//echo $obj->printText();

//class Point{
//    private  $x;
//    private  $y;
//    public function setX($x){
//        $this->x = $x;
//    }
//    public function setY($y){
//        $this->y = $y;
//    }
//    public function getX(){
//        return  $this->x;
//    }
//    public function getY(){
//        return  $this->y;
//    }
//    public function distance(){
//        return sqrt($this->getX()**2 + $this->getY()**2);
//    }
//}
//$p1= new Point();
//$p1->setX(5);
//$p1->setY(7);
//
//echo $p1->distance();
//class Hello {
//    public static function printText(){
//        return "Hello world!";
//    }
//}
//echo Hello::printText(); //если статик, то переменная для вызова объекта класса не нужна

class Page{
    static $content = "Тело сайта<br>";
    public static function footer(){
        return "Это подвал сайта<br>";
    }
    public static function header(){
        return "Это шапка сайта<br>";
    }
    public static function site(){
        echo self::header().//self используется чтобы сослаться на статическую переменную этого же класса
            self::$content.
            self::footer();
    }
}
Page::site();

?>

</body>
</html>
