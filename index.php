<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Авторизация</h1>
    <form>
        <label for="login">Логин</label>
        <input type="text" name="login" id="login">
        <label for="pass">Пароль</label>
        <input type="text" name="pass" id="pass">
        <button type="submit">Отправить</button>
    </form>
    <a href="registration.php">Зарегистрироваться</a>
</body>

<?php
    echo "<h2>Вы успешно вошли как ".$_GET["login"]."! Ваш пароль: ".$_GET["pass"]."</h2>";
?>
</html>