<?php
require_once 'db.php';

$sql = "INSERT INTO blog_test.users (name, comment) VALUES (:name, :comment)";
// Подготовка запроса
$statement = $pdo->prepare($sql);
// Выполнение подготовленного запроса
$statement->execute($_POST);

// Переадресация на главную
header('Location: /index.php');
