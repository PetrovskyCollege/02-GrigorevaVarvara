<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Регистрация</h1>
    <form>
        <label for="login">Логин</label>
        <input type="text" name="login" id="login">
        <label for="pass">Пароль</label>
        <input type="text" name="pass" id="pass">
        <label for="name">Имя</label>
        <input type="text" name="name" id="name">
        <label for="DateOfBirth">Дата рождения</label>
        <input type="date" name="DateOfBirth" id="DateOfBirth">
        <label for="weight">Вес</label>
        <input type="number" name="weight" id="weight">
        <label for="height">Рост</label>
        <input type="number" name="height" id="height">
        <button type="submit">Отправить</button>
    </form>
</body>

<?php
    echo "<h2>Вы успешно вошли как ".$_GET["login"]."! Ваш пароль: ".$_GET["pass"]."</h2>";
?>
</html>