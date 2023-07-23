<?php
require_once 'controller/checkAuth.php';

if (checkAuth()) {
    header('Location: /');
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

    <title>Авторизация</title>
</head>
<body class="d-flex h-100 align-items-center py-4 bg-light-subtle">
<div class="col-lg-4 m-auto">
    <form action="controller/checkUser.php" method="post">
        <h1 class="text-center h3 mb-3 fw-normal">Авторизация</h1>

        <div class="form-floating mb-1">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"
                   required>
            <label for="floatingInput">e-mail</label>
        </div>
        <div class="form-floating mb-1">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password"
                   required minlength="6">
            <label for="floatingPassword">Пароль</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" name="rememberUser"
                   id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Запомнить меня
            </label>
        </div>

        <button class="w-100 btn btn-primary py-2" type="submit">Войти</button>

        <p class="mt-5 mb-3 text-body-secondary">Еще не зарегистрированы? <a
                    href="registration.php">Зарегистрироваться.</a></p>
    </form>
</div>
</body>
</html>