<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
</head>  <!-- comment ctrl+/ -->
<body>
<?php
$arr= [5=> 1,2,3];
for ($i=0; $i<10; $i++){
    if (isset($arr[$i])){
        echo "Element \$arr[$i] olemas<br>";
    }else{
        echo "Element \$arr[$i] puudu<br>";
    }
}

if (in_array(2,$arr)){
    echo "Arv 2 on leitud massivis arr<br>";
}else{
    echo "arv 2 on puudu<br>";
}

if (array_key_exists(5,$arr)){
    echo "Key 5 on leitud massivis arr<br>";
}else{
    echo "Key 5 on puudu<br>";
}
if (array_key_exists(5,$arr)){
    echo "Key 5 on leitud massivis arr<br>";
}else{
    echo "Key 5 on puudu<br>";
}

echo array_search(2,$arr);
echo "<br>";
echo array_search(5,$arr);

unset($arr[6]);
echo "<pre>";
print_r($arr);
echo "</pre>";

?>
</body>
</html>
