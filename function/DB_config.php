<?php
$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "QLDiemSV";
$dsn        = "mysql:host=$host;dbname=$dbname";
$options    = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);
