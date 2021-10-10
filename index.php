<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$transport = [
        "Auto"=>["BMW","Audi","Saab"],
    "Lennukid"=>["Boeing","IL","Airbus"],
    "Laevad"=>["Parv","Laev","AllveeLaev"]
];
echo    "<pre>";
print_r($transport);
echo "</pre>";

echo $transport["Lennukid"][2];

?>
</body>
</html>
