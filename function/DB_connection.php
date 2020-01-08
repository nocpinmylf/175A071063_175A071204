<?php
require "DB_config.php";
try {
    $connection = new PDO("mysql:host=$host", $username, $password, $options);
    // $sql = file_get_contents("SQL/1.CreateDatabase.sql");
    // $connection->exec($sql);

    echo "Khởi tạo thành công.";
} catch (PDOException $error) {
    echo $connection . "</br></br>" . $error->getMessage();
}
