<?php

$db_host = 'localhost';  // 主機名稱
$db_name = 'Micheal';  // 資料庫名稱
$db_user = 'Micheal';
$db_pass = 'admin';

// data source name
$dsn = "mysql:host={$db_host};dbname={$db_name};charset=utf8";

$pdo_options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //錯誤的模式用例外模式 try catch語法操作
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //讀取模式 關聯陣列
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",// 連線完 全部用utf8為主
];  // ::代表常數定義在類別

$pdo = new PDO($dsn, $db_user, $db_pass, $pdo_options);

