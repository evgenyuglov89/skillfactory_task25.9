<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Загрузка изображения</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="registr">
    <form>
        <label>Название</label>
        <input type="text" name="title" placeholder="Введите название изображения">
        <label>Комментарий</label>
        <input type="text" name="comment" placeholder="Введите комментарий">
        <label>Выберите изображение</label>
        <input type="file" name="img">
        <button type="submit" class="upload-btn">Загрузить</button>
        <p class="msg none">Lorem ipsum.</p>
        <a href="index.php">Вернуться на главную страницу</a>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>