<?php

require_once 'db.php';

$sql = "SELECT * FROM blog_test.users";
// Подготовка запроса
$statement = $pdo->prepare($sql);
// Выполнение подготовленного запроса
$statement->execute();
// Возвращает массив на основе подготовленного запроса
$users = $statement->fetchAll();
