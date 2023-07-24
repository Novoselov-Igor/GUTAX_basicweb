<?php
$pdo = require_once '../config/connect.php';

$email = strtolower(trim($_POST['email']));
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$passwordRepeat = trim($_POST['passwordRepeat']);

$error = '';

if ($email === null) {
    $error = 'Введите ваш email.';
} elseif ($login === null) {
    $error = 'Введите логин.';
} elseif ($password === null) {
    $error = 'Введите пароль.';
} elseif (strlen($password) < 6) {
    $error = "Пароль слишком короткий.\nПароль должен содержать минимум 6 символов.";
} elseif ($passwordRepeat === null || $password !== $passwordRepeat) {
    $error = 'Пароли не совпадают.';
}

$check = $pdo->prepare("SELECT * FROM users WHERE `username` = :username");
$check->execute(['username' => $login]);
if ($check->rowCount() > 0) {
    $error('Это имя пользователя уже занято.');
}
$check = $pdo->prepare("SELECT * FROM users WHERE `email` = :email");
$check->execute(['email' => $email]);
if ($check->rowCount() > 0) {
    $error('Эта почта уже занята.');
}

if ($error !== '') {
    echo $error;
    exit;
}

$insert = $pdo->prepare("INSERT INTO users (username, email, password, remember) VALUES (?, ?, ?, 0)");
$insert->execute([$login, $email, password_hash($password, PASSWORD_DEFAULT)]);

header('Location: /login.php');