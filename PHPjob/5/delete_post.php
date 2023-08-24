<?php
require_once('db_connect.php');
require_once('function.php');

$id = $_GET['id'];

if (empty($id)) {
    header("Location: main.php");
    exit;
}

try {
    $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
    $sql = "DELETE FROM books WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
} catch (PDOException $e) {
    echo 'Error: ' . $e->getMessage();
    die();
}