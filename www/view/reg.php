<?php
require_once '../functions/reg.php';
?>


<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/css.css">
    <title>
        Регистрация
    </title>
</head>
<body>
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
    <?php if(true == registration()) {
    ?><h4>Вы успешно зарегистрировались.</h4><?php
    }; ?>
</body>
</html>
