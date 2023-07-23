<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Регистрация</title>
</head>
<body class="d-flex h-100 align-items-center py-4 bg-light-subtle">
<div class="col-lg-4 m-auto">
    <form action="controller/registerUser.php" method="post">
        <h1 class="text-center h3 mb-3 fw-normal">Регистрация</h1>

        <div class="form-floating mb-1">
            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com"
                   required>
            <label for="floatingInput">e-mail</label>
        </div>
        <div class="form-floating mb-1">
            <input type="text" class="form-control" name="login" id="floatingInput" placeholder="login"
                   required>
            <label for="floatingInput">Логин</label>
        </div>
        <div class="form-floating mb-1">
            <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password"
                   required minlength="6">
            <label for="floatingPassword">Пароль</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" name="passwordRepeat" id="floatingPassword"
                   placeholder="Password repeat" required minlength="6">
            <label for="floatingPassword">Повторить пароль</label>
        </div>

        <button class="w-100 btn btn-primary py-2" type="submit">Зарегистрироваться</button>

        <p class="mt-5 mb-3 text-body-secondary">Уже зарегистрированы? <a href="login.php">Войти.</a></p>
    </form>
</div>
</body>
</html>