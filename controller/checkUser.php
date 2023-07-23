<?php
$pdo = require_once '../config/connect.php';

$email = strtolower(trim($_POST['email']));
$password = trim($_POST['password']);

$remember = 0;
if ($_POST['rememberUser'] === 'on')
    $remember = 1;

$error = '';
if ($email === null) {
    $error = 'Введите ваш email.';
} elseif ($password === null) {
    $error = 'Введите пароль.';
} elseif (strlen($password) < 6) {
    $error = "Пароль слишком короткий.\nПароль должен содержать минимум 6 символов.";
}

$userCheck = $pdo->prepare("SELECT * FROM users WHERE `email` = :email");
$userCheck->execute(['email' => $email]);
if (!$userCheck->rowCount()) {
    $error('Пользователь с такими данными не зарегистрирован');
} else {
    $user = $userCheck->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password, $user['password'])) {
        if (password_needs_rehash($user['password'], PASSWORD_DEFAULT)) {
            $newHash = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $userCheck = $pdo->prepare('UPDATE users SET `password` = :password WHERE `email` = :email');
            $userCheck->execute(['email' => $email, 'password' => $newHash,]);
        }
        if ($user['remember']) {
            setcookie('userId', $user['id'], time() + 36000, '/');
        } else {
            setcookie('userId', $user['id'], time() + 600, '/');
        }
    }
}

if ($error !== '') {
    echo $error;
    exit;
}
header('Location: /');


