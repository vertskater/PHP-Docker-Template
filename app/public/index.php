<?php

$dsn = "mysql:dbname=test;host=mysql";
$username = 'root';
$password = 'password';

$pdo = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
var_dump($pdo);

