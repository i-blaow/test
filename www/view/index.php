<?php
require_once __DIR__ . '/../models/sql.php';
require_once __DIR__ . '/../functions/reg.php';
echo isUser();
// $all_info = get_AllNews();
// foreach ($all_info as $value) {
//    echo $value['id'] . '<br>';
// }
?>

<html>
<head>
    <meta charset="utf-8">
    <link rel=stylesheet href="css/css.css">
    <link rel="shortcut icon" href="images/logo/favicon.png" type="image/png">
    <title>News Portal</title>
</head>
<body>
<img src="images/logo/DesignEvo-Transparent.png">
<nav>
    <a href="/">Добавить новость</a> |
    <a href="/">Войти</a> |
    <a href="/">Регистрация</a>
</nav>
</body>
</html>