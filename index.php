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
abstract class Animal{ //мы не можем создавать объекты данного класса, но можем наследоваться
    public  $legs = 4;
    public  function info(){ //не можем переопредляет метод final
        echo "У меня {$this->legs} лапы.";
    }
    abstract public function color();
}

class Dog extends  Animal {
    public function color(){
        echo "red";
    }
    public $name = "Собака";
    public  function info(){ //переопределяем метод, называется перегрузкой
        echo "Я собака. У меня {$this->legs} лапы.";
    }
    public function voice(){ //protected недоступен извне класса, но доступен при наследовании
        echo "{$this->name} издает звук гав-гав.";
    }
    public function parentInfo(){
        parent::info();
    }
}
$dog = new Dog();
$dog->info();
$dog->voice();

class Cat extends  Animal {
    public function color(){
        echo "black";
    }
    public $name = "Кошка";
    public function voice(){
        echo "{$this->name} издает звук мяу-мяу.";
    }
}
$cat = new Cat();
$cat->info();
$cat->voice();

echo "<br>";

$dog->parentInfo();
echo "<br>";
if ($dog instanceof Animal){//принадлежность классу
    echo "Dog является экземпляром класса Animal";
}
if ($dog instanceof Dog){
    echo "Dog является экземпляром класса Dog";
}
if ($cat instanceof Cat){
    echo "Cat является экземпляром класса Cat";
}
if ($cat instanceof Animal){//принадлежность классу
    echo "Cat является экземпляром класса Animal";
}


?>

</body>
</html>
