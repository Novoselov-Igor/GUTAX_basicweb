<?php
$pdo = require_once '../config/connect.php';

$name = trim($_POST['name']);
$surname = trim($_POST['surname']);
$likeSite = $_POST['likeSite'];
$checkboxes = $_POST['checkboxes'];
$select = $_POST['select'];
$comment = trim($_POST['comment']);

print_r($_POST);