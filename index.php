<?php
session_start();
include "app/connect.php";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Галерея изображений</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body class="index">
<div class="container">
    <header class="header">
        <?php 
        if(!isset($_SESSION['user'])){
        ?>
            <div class="buttons">
                <form action="/autorization.php">
                    <button class="auth_button">Вход</button>
                </form>
                <form action="registration.php">
                    <button class="registr_button">Регистрация</button>
                </form>
            </div>
        <?php
        }else{
            echo '<h3>Добро пожаловать ' . $_SESSION['user']['login'] . '</h3>';
            echo '<a class="exit" href="app/logout.php">Выход</a>';
        }
            ?>
    </header>

    <section>
        <div class="container">
            <?php 
                if(isset($_SESSION['user'])){
            ?>
                <div class="buttons">
                    <form action="/upload.php">
                        <button class="upload_button">Загрузить новое изображение</button>
                    </form>
                </div>
            <?php
                }
            ?>
            <div class="section">
                <?php 
                    $result = mysqli_query($connect, "SELECT * FROM `images`");
                    $images = mysqli_fetch_all($result, MYSQLI_ASSOC);
                    foreach ($images as $img) {
                ?>
                <div class="image">
                    <h1>Название: <?= $img["title"]?></h1>
                    <img class="img" src="<?=$img["link"]?>" alt="">
                    <p class="comment">Комментарий: <?=$img["comment"]?></p>
                    <p class="author">Автор: <?=$img["author"]?></p>
                    <p class="date">Дата загрузки изображения: <?=$img["date_upload"]?></p>
                    <?php 
                        if(isset($_SESSION['user']) && $_SESSION['user']['login'] == $img["author"]){
                    ?>

                    <a href="comment.php?id=<?=$img["id"]?>">
                        <button>Добавить комментарий</button>
                    </a>
                    <a href="app/delete.php?type=comment&id=<?=$img["id"]?>">
                        <button>Удалить комментарий</button>
                    </a>
                    <a href="app/delete.php?type=img&id=<?=$img["id"]?>">
                        <button>Удалить изображение</button>
                    </a>
                    <?php
                        }
                    ?>

                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
    </section>
</div>


    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>