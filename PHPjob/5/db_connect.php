<?php
define('DB_DATABASE', 'yigroupBlog');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('PDO_DSN', 'mysql:host=localhost;charset=utf8;dbname='.DB_DATABASE);

try {
    $PDO = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    echo '';
} catch (PDOException $e) {
    echo 'Error:' . $e->getMessage();
    die();
}