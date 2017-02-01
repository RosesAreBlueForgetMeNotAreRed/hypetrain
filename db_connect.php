<?php

$host = "localhost"; 
$db = "host1551845";
$user = "host1551845";
$pass = "74b296f5";
$charset = "utf8";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);
$pdo = new PDO($dsn, $user, $pass, $opt);