<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
 $array= ["red","green","blue","violet","gray"];
 echo $array[rand(0,count($array)-1)];

 $lenth=rand(5,10);
 for ($i=0;$i<$lenth;$i++){
     $array[$i]=rand(0,100);
 }
 sort($array);
echo "<pre>";
 print_r($array);
 echo "</pre>";

 $month=file("month.txt");
echo "<pre>";
print_r($month);
echo "</pre>";

?>
</body>
</html>
