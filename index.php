<?php
require_once 'controller/checkAuth.php';

if (!checkAuth()) {
    header('Location: login.php');
    die;
}
?>
<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <title>Главная страница</title>
</head>
<body class="d-flex h-100 align-items-center py-4 bg-light-subtle">

</div>
</body>
</html>