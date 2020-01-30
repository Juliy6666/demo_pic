<?php
    session_start();

    $picName = $_POST['newPic'];

    array_push($_SESSION['picList'], $picName);

    header('Location: /pic-list');
?>