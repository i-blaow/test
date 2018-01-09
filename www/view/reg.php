<?php
session_start();
require_once 'G:/OSPanel/domains/test1.local/www/functions/reg.php';
if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])) {

    if (registration()) {
        $_SESSION['notifications'][] = 'Регистрация прошла успешно';
        header('Location: http://test1.local/index.php');
    } else {
        echo 'Такие данные уже используются';
    }
}
?>


<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-4.0.0-beta.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://test1.local/view/css/main.css">
    <title>
        Регистрация
    </title>
</head>
<body>
<nav class ="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php echo $_COOKIE['login'] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li>
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



    <form action="reg.php" method="post" class="reg">
        <label for="log">Имя:         </label><input type="text" name="login" id="log" required placeholder="Иван">
        <br>
        <label for="pass">Пароль:     </label><input type="password" name="password" id="pass" required placeholder="******">
        <br>
        <label for="email">Ваш e-mail:</label><input type="email" name="email" id="email" required placeholder="example@mail.ru">
        <br>
        <input type="submit" value="Отправить">
    </form>
<br>
</body>
</html>
