<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

try {
    $dbName = 'performance_schema';
    $username = 'root';
    $password = '123456';

    $conn = new PDO('mysql:host=mysql:3306;dbname=' . $dbName, $username, $password);

    echo 'mysql 連接成功<br>';

    $redis = new \Redis();
    $redis->connect('redis','6379');
    $redis->auth('123456');

    echo 'redis 連接成功<br>';
} catch (Exception $e) {
    echo $e->getMessage();
}