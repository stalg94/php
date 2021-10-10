<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$number= ["1","2","3","4","hello",true,54];
for ($i=0; $i<count($number);$i++)
    echo "$number[$i]<br>";

$arr=[
        "auto"=>"Dodge",
    "plane"=>"IL-2",
    "ship"=>"Black Paerl"
];
foreach ($arr as $key => $value){
    echo "$key : $value <br>";
};

$transport = [
    "Auto"=>["BMW","Audi","Saab"],
    "Lennukid"=>["Boeing","IL","Airbus"],
    "Laevad"=>["Parv","Laev","AllveeLaev"]
];
foreach ($transport as $key => $array){
    echo "<b>$key</b><br>";
    foreach ($array as $value){
        echo "<li>$value</li>";
    }
}
?>
</body>
</html>
