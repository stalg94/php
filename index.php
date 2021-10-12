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
class Animal {
    public  $legs = 4;
    public  function info(){
        echo "У меня {$this->legs} лапы.";
    }
}

class Dog extends  Animal {
    public $name = "Собака";
    public  function info(){ //переопределяем метод, называется перегрузкой
        echo "Я собака. У меня {$this->legs} лапы.";
    }
    public function voice(){ //protected недоступен извне класса, но доступен при наследовании
        echo "{$this->name} издает звук гав-гав.";
    }
}
$dog = new Dog();
$dog->info();
$dog->voice();

class Cat extends  Animal {
    public $name = "Кошка";
    public function voice(){
        echo "{$this->name} издает звук мяу-мяу.";
    }
}
$cat = new Cat();
$cat->info();
$cat->voice();





?>

</body>
</html>
