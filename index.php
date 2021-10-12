<DOCTYPE! html>
<html lang = "en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initital-scale = 1.0">
    <title><?="Uus leht"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>  <!-- comment ctrl+/ -->
<body>

<form method="post" action="sendmail.php">
    <select name="subject">
        <option disabled selected>Тема письма</option>
        <option value="1">Вопрос по уроку</option>
        <option value="2">Личный вопрос</option>
        <option value="3">Благодарнсть</option>
    </select>
    <input type="email" name="email" placeholder="Введите Ваш email" maxlength="50" required >
    <textarea name="message" placeholder="Введите сообщение" maxlength="150" required></textarea>
    <img src="captcha1.png">
    <input type="number" name="captcha" placeholder="Введите ответ" maxlength="3" required>
    <input type="submit" value="Отправить письмо">
</form>
</body>
</html>
