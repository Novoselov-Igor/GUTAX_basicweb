<?php
require_once 'controller/checkAuth.php';

if (!checkAuth()) {
    header('Location: login.php');
    die;
} else {
    $pdo = require_once 'config/connect.php';
    $user = $pdo->prepare("SELECT * FROM users WHERE `id` = :id");
    $user->execute(['id' => $_COOKIE['userId']]);
    $user = $user->fetch(PDO::FETCH_ASSOC);
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
<body class="h-100 bg-light-subtle">
<div class="shadow">
    <header class="d-flex flex-wrap justify-content-center p-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
            <span class="fs-4">Практика 1 "Базовый Web"</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link" aria-current="page">
                    <?php echo htmlspecialchars($user['username']) ?></a></li>
            <form method="post" action="controller/logout.php">
                <button type="submit" class="btn btn-primary">Выйти</button>
            </form>
        </ul>
    </header>
</div>
<div class="container w-50">
    <h1 class="text-center mb-3">Обратная связь</h1>
    <form action="controller/sendFeedBack.php" method="post">
        <div class="form-floating mb-1">
            <input type="text" class="form-control" name="name" id="name" placeholder="Иван" required>
            <label for="name">Введите имя</label>
        </div>
        <div class="form-floating mb-1">
            <input type="text" class="form-control" name="surname" id="surname" placeholder="Иванов" required>
            <label for="surname">Введите фамилию</label>
        </div>
        <div class="d-flex my-3">
            <p class="mx-1">Вам нравится сайт?</p>
            <div class="form-check mx-2">
                <input class="form-check-input" type="radio" value="да" name="likeSite" id="radioYes" checked>
                <label class="form-check-label" for="radioYes">
                    Да
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" value="нет" name="likeSite" id="radioNo">
                <label class="form-check-label" for="radioNo">
                    Нет
                </label>
            </div>
        </div>
        <div class="d-flex my-3">
            <p class="mx-1">Что вам понравислось на сайте?</p>
            <div class="form-check mx-2">
                <input class="form-check-input" type="checkbox" value="верстка" id="layout" name="checkboxes[]">
                <label class="form-check-label" for="layout">
                    Верстка
                </label>
            </div>
            <div class="form-check mx-2">
                <input class="form-check-input" type="checkbox" value="дизайн" id="design" name="checkboxes[]">
                <label class="form-check-label" for="design">
                    Дизайн
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="функционал" id="functions" name="checkboxes[]">
                <label class="form-check-label" for="functions">
                    Функционал
                </label>
            </div>
        </div>
        <div>
            <select class="form-select mb-2" name="select" aria-label="select">
                <option selected>Откройте это меню</option>
                <option value="1">Один</option>
                <option value="2">Два</option>
                <option value="3">Три</option>
            </select>
        </div>
        <div class="form-floating mb-1">
            <textarea class="form-control" name="comment" id="comment"></textarea>
            <label for="comment">Комментарий</label>
        </div>
        <div class="my-3 text-center">
            <button type="submit" class="btn btn-primary px-4 mx-3">Отправить</button>
            <button type="reset" class="btn btn-danger px-4">Сбросить</button>
        </div>
    </form>
</div>
</body>
</html>