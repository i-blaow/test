<?php
require_once '../models/sql.php';
require_once '../functions/login.php';
require_once '../functions/reg.php';
?>

<!doctype html>
<head>
    <link rel="stylesheet" href="css/css.css">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вход</title>
</head>
<body>
    <form action="login.php" method="post">
        <p><label for="login">Введите логин: </label><input name="login" type="text" id="login"></p>
        <p><label for="password">Введите пароль: </label><input name="password" type="password" id="password"></p>
        <p><label for="Remember_me">Запомнить?</label><input name="Remember_me" type="checkbox" id="Remember_me"></p>
        <p><input type="submit" value="Войти"></p>
    </form>
<?php isuser(); ?>
</body>
</html>