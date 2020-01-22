<?php

header("Content-type: text/html; charset=utf-8");

function getConnection()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "josimar_pescados";

    $options =
    [
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
    ];

    try {
        $pdo = new PDO("mysql:host=$servername; dbname=$dbname", "$username", "$password", $options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
}
