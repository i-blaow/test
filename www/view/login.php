

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="../bootstrap-4.0.0-beta.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="http://test1.local/view/css/main.css">
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>
<nav class ="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php echo $_COOKIE['login'] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <a class="nav-link" href="http://test1.local/index.php">Главная<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ссылка</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
    </div>

</nav>

<div class="container">
    <form action = "login.php" method = "post" id="form-signin">
        <div class="inputFields">
            <br>
        <label for="login" class="sr-only"></label><input name = "login" type = "text" id = "login" placeholder="Логин">
        <br>
        <label for="password" class="sr-only"></label><input id="inputPassword" name = "password" type = "password" placeholder="Пароль">
        <br>
        <label for="Remember_me" > Запомнить </label><input name = "Remember_me" type = "checkbox" id = "Remember_me" >
        <br>
            <input class="btn btn-primary" type = "submit" value="Войти">
            <br>
        </div>
    </form>
</div>
</body>
</html>
