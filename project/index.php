<?php
try {
    echo ini_get('memory_limit') . '<br>';

    $dbname = 'performance_schema';
    $username = 'root';
    $password = '123456';

    $conn = new PDO('mysql:host=mysql:3306;dbname=' . $dbname, $username, $password);

    echo '已連接資料庫<br>';

    $stmt = $conn->prepare('SELECT * FROM accounts');
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();

    foreach ($result as $key => $value) {
        echo $value['USER'] . '<br>';
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
