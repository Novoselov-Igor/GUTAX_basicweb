<?php
$pdo = require_once '../config/connect.php';

$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$likeSite = $_POST['likeSite'];
$checkboxes = $_POST['checkboxes'];
$select = $_POST['select'];
$comment = trim($_POST['comment']);

$likeSiteDetailed = '';
if ($checkboxes !== null) {
    foreach ($checkboxes as $item) {
        $likeSiteDetailed .= $item . ' ';
    }
} else {
    $likeSiteDetailed = null;
}

$error = '';
if ($name === null) {
    $error = 'Введите имя';
} elseif ($surname === null) {
    $error = 'Введите фамилию';
} elseif ($likeSite === null || $select === null) {
    $error = 'Непредвиденная ошибка';
}

if ($error !== '') {
    echo $error;
    exit;
}

$sendFeedback = $pdo->prepare('INSERT INTO feedbacks (name, surname, likesSite, likesSiteDetailed, someData, comment) 
VALUES (?,?,?,?,?,?)');
$sendFeedback->execute([$name, $surname, $likeSite, trim($likeSiteDetailed), $select, $comment]);

header('Location: /');