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
    <title>Добавить комментарий</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="registr">
    <form action="app/add_comment.php" method="post">
        <label>Комментарий к изображению.</label>
        <textarea rows="10" cols="45" name="text"></textarea>
        <input type="hidden" id="Id" name="Id" value="<?=$_GET["id"]?>" />
        <button type="submit">Отправить</button>
        <a href="/index.php">Вернуться на главную страницу</a>
    </form>

    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>