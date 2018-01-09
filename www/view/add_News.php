<?php
?>

<html>
<head>
    <meta charset="uts-8">
    <link rel="stylesheet" href="../bootstrap-4.0.0-beta.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://test1.local/view/css/main.css">
    <link rel="stylesheet" href="../FontAwesome/web-fonts-with-css/css/fontawesome-all.min.css">

<title>Добавить новость</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col col-xl-12">
<form method="post" action="add_News.php">
    <h4>Введите заголовок: </h4>
    <textarea name="title" class="inTitle" cols="40" rows="2"></textarea>
    <h4 id="enterNews">Введите новость: </h4>
    <textarea name="text" class="inText" cols="70" rows="20"></textarea>
    <input type="submit" value="Опубликовать">
</form>
        </div>
    </div>



<div class="row">
    <div class="col col-auto">
<form method="post" action="add_News.php" enctype="multipart/form-data">
    <i id="dFile" class="fa fa-file"></i><label id="photoAdd" for="photoAdd">Добавить фото для новости: </label>
    <br>
    <input id="photoAdd" type="file" name="image">
</div>
</div>
</div>
</form>
</body>
</html>
