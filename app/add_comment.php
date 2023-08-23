<?php

session_start();
require_once 'connect.php';

$text = $_POST['text'];
$id = $_POST['Id'];

if($text != "")
    $check_login = mysqli_query($connect, "UPDATE images SET comment = '$text' WHERE `id` = '$id'");

header('Location: ../index.php');