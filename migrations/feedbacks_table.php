<?php
$pdo = require_once '../config/connect.php';

$pdo->exec("CREATE table if not exists feedbacks (
    id int primary key  auto_increment,
    name varchar(100) not null ,
    surname varchar(100) not null,
    likesSite varchar(3) not null,
    likesSiteDetailed varchar(50),
    someData varchar(50),
    comment varchar(300)
)");