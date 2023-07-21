<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Авторизация</title>
</head>
<body class="d-flex h-100 align-items-center py-4 bg-light-subtle">
<main class="col-lg-4 m-auto">
    <form>
        <h1 class="text-center h3 mb-3 fw-normal">Авторизация</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Адрес эл.почты</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Пароль</label>
        </div>

        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                Запомнить меня
            </label>
        </div>

        <button class="w-100 btn btn-primary py-2" type="submit">Войти</button>

        <p class="mt-5 mb-3 text-body-secondary">Еще не зарегистрированы? <a href="registration.php">Зарегистрироваться.</a> </p>
    </form>
</main>
</body>
</html>