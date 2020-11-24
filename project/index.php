<?php
try {
    $dbname = 'test';
    $username = 'root';
    $password = '123456';

    $conn = new PDO('mysql:host=mysql:3306;dbname=' . $dbname, $username, $password);

    echo '已連接資料庫<br>';

    $stmt = $conn->prepare('SELECT * FROM name');
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);

    foreach ($stmt->fetchAll() as $key => $value) {
        echo $value["name"] . '<br>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
