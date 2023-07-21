<!DOCTYPE html>
<html lang="ru" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <title>Регистрация</title>
</head>
<body class="d-flex h-100 align-items-center py-4 bg-light-subtle">
<main class="col-lg-4 m-auto">
    <form>
        <h1 class="text-center h3 mb-3 fw-normal">Регистрация</h1>

        <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Адрес эл.почты</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Пароль</label>
        </div>
        <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Повторить пароль</label>
        </div>

        <button class="w-100 btn btn-primary my-3 py-2" type="submit">Зарегистрироваться</button>

        <p class="mt-5 mb-3 text-body-secondary">Уже зарегистрированы? <a href="index.php">Войти.</a> </p>
    </form>
</main>
</body>
</html>