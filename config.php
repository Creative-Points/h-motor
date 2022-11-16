<?php

    $dsn = 'mysql:host=localhost;dbname=h_motor';
    $user = 'root';
    $pass = '';
    $option = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

    );

    try{
        $conn = new PDO($dsn, $user, $pass, $option);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo 'u r connected';
    }
    catch(PDOException $e){
        echo 'faile';
    }

    $path = 'uploads/';