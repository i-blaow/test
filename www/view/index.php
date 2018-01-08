<?php
$res = get_AllNews();
?>
<script>
    function logOut() {
        var date = new Date(0);
        document.cookie = "login=; path=/; expires=" + date.toUTCString();
        document.cookie = "token=; path=/; expires=" + date.toUTCString();
    }
</script>

<html>
<head>
    <meta charset="utf-8">
    <link rel=stylesheet href="../view/css/css.css">
    <link rel="shortcut icon" href="../view/images/logo/favicon.png" type="image/png">
    <title>News Portal</title>
</head>
<body>
<img src="../view/images/logo/DesignEvo-Transparent.png">
<nav>
    <a id="linkNav" href="/">Добавить новость</a> |
    <a id="linkNav" href="login.php">Войти</a> |
    <a id="linkNav" href="reg.php">Регистрация</a> |
    <a id="linkNav" href="/" onclick="logOut()">Выход</a></a>

</nav>
<div>
    <?php foreach ($res as $key => $value){
        ?><h2 class="title"><a class="title" href="/"><?php echo $value['title']; ?></a></h2>
        <img alt="<?php echo $value['PhotoName'] ?>" class="PhotoLink" src="<?php echo $value['PhotoLink']; ?>">
        <article class="news"><?php echo $value['text']; ?> </article>
    <?php
    }
    ?>





</div>
</body>
</html>