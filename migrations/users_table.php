<?php
$pdo = require_once '../config/connect.php';

$pdo->exec('CREATE table if not exists users (
    id int primary key  auto_increment,
    username varchar(100),
    email varchar(100),
    password varchar(100),
    remember bool
)');