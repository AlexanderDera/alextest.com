<?php
require_once 'db.php';
session_start();
$_SESSION['msg'] = 'store';
$sql = "INSERT INTO blog_test.users (name, comment) VALUES (:name, :comment)";
// Подготовка запроса
$statement = $pdo->prepare($sql);
// Выполнение подготовленного запроса
$statement->execute($_POST);

// Переадресация на главную
header('Location: /index.php');
