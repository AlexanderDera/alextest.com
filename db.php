<?php
$driver = 'mysql';
$host = 'alextest.com';
$db_name = 'blog_test';
$db_user = 'aroot';
$db_password = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                                                            // массив с дополнительными настройками подключения.
                                                            // В данном примере мы установили отображение ошибок,
                                                            // связанных с базой данных, в виде исключений
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
];

$dns = "$driver:host=$host;db_name=$db_name;charset=$charset";

$pdo = new PDO($dns, $db_user, $db_password, $options);
