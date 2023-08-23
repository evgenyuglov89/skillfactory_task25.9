<?php

session_start();
require_once 'connect.php';

$type = $_GET['type'];
$id = $_GET["id"];

if($type == "comment")
    mysqli_query($connect, "UPDATE images SET comment = null WHERE `id` = '$id'");
if($type == "img"){
    $result = mysqli_query($connect, "SELECT * FROM images WHERE `id` = '$id'");
    $img = mysqli_fetch_assoc($result);
    $file = "../" . $img['link'];
    if (file_exists($file)) {
        unlink($file);
    }

    mysqli_query($connect, "DELETE  FROM images WHERE `id` = '$id'");
}

header('Location: ../index.php');