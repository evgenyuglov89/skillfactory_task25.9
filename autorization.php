<?php
session_start();

if (isset($_SESSION['user'])) {
    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="registr">
    <form>
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit" class="login-btn">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="/registration.php">зарегистрируйтесь</a>!
        </p>
        <p class="msg none">Lorem ipsum.</p>
        <a href="/index.php">Вернуться на главную страницу</a>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>