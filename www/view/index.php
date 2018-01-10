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
    <link rel="stylesheet" href="../bootstrap-4.0.0-beta.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-4.0.0-beta.3/docs/4.0/examples/blog/blog.css">
    <link rel="stylesheet" href="http://test1.local/view/css/main.css">
    <meta charset="utf-8">
    <link rel="shortcut icon" href="../view/images/logo/favicon.png" type="image/png">
    <title>News Portal</title>
</head>
<nav class ="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="#"><?php echo $_COOKIE['login'] ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">

            <a class="nav-link disabled" href="http://test1.local/index.php">Главная<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php">Войти</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="reg.php">Регистрация</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="login.php" onclick="logOut()">Выход</a>
            </li>
        </ul>
    </div>
</nav>








<body>
<img id="mainLogo" src="../view/images/logo/DesignEvo-Transparent.png">
<div class="blog-post">
    <?php foreach ($res as $key => $value){
        ?><h2 class="blog-post-title"><a href="solo_new.php?Link=<?php echo $value['Link']; ?>"><?php echo $value['title']; ?></a></h2>
        <p class="blog-post-meta"><?php echo $value['Date']; ?></p>
        <a href="<?php echo $value['PhotoLink']; ?>"><img alt="<?php echo $value['PhotoName']; ?>" class="PhotoLink" src="<?php echo $value['PhotoLink']; ?>"></a>
        <article><?php echo $value['text']; ?> </article>
    <?php
    }
    ?>





</div>
</body>
</html>