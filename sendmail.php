<?php
if ($_POST["captcha"] != 13){
    echo "Неправльный ввод числа!";
    header("location: index.php"); //возвращает на указанную страницу
    exit;
}
if ($_POST["subject"] == 1){
    $subject= "Вопрос по уроку";
}elseif ($_POST["subject"] == 2){
    $subject= "Личный вопрос";
}elseif ($_POST["subject"] == 3){
    $subject= "Благодарнсть";
}else{
    $subject= "Вопрос по уроку";
}

$to = "stalg28@gmail.com";
$from=trim($_POST["email"]); //удаление лишних пробелов


$message= htmlspecialchars($_POST["message"]);
$message= urldecode($message);
$message= trim($message);

$headers = "From: $from". "\r\n".
"Reply-To: $from" . "\r\n" .
"X-Mailer: PHP/".phpversion();

if (mail($to,$subject,$message,$headers)){
    echo "Письмо отправлено";
}else{
    echo "Viga";
}
?>
