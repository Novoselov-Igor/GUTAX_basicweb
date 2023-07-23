<?php
$pdo = require_once '../config/connect.php';

$email = strtolower(trim($_POST['email']));
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$passwordRepeat = trim($_POST['passwordRepeat']);

$error = '';

if ($email === '') {
    $error = 'Введите ваш email.';
} elseif ($login === '') {
    $error = 'Введите логин.';
} elseif ($password === '') {
    $error = 'Введите пароль.';
} elseif (strlen($password) < 6) {
    $error = "Пароль слишком короткий.\nПароль должен содержать минимум 6 символов.";
} elseif ($passwordRepeat === '' || $password !== $passwordRepeat) {
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

$insert = $pdo->prepare("insert into users (username, email, password, remember) values (?, ?, ?, 0)");
$insert->execute([$login, $email, password_hash($password, PASSWORD_DEFAULT)]);

header('Location: /login.php');