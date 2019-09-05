<?php

function getConnection()
{
    $dsn = 'mysql:host=localhost;dbname=form_bayer;charset=utf8';
    $user = 'root';
    $pass = '';
    try {
        $pdo = new PDO($dsn, $user, $pass);
        return $pdo;
    } catch (Exception $ex) {
        echo 'Erro ' . $ex->getMessage();
    }
}
