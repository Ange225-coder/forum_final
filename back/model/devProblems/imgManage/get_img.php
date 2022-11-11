<?php

    $db = new PDO('mysql:host=localhost;dbname=forum;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    $dbConnect = $db;
    $queryGetImg = $dbConnect->prepare('SELECT * FROM f_screens WHERE id = ? LIMIT 0, 1');
    $queryGetImg->execute(array($_GET['id']));

    $get_img = $queryGetImg->fetchAll();

    echo $get_img[0]['screen'];
