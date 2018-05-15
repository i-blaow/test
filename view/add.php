<html>
<head>
    <meta charset="utf-8">
    <title>Добавить новость</title>
</head>
<body>
<center>
    <form action="/add.php" method="post">
        <label>
        <input type="text" name="title" placeholder="Название" required>
        </label>
        <br>
        <br>
        <label>
        <textarea name="text" cols="50" rows="20" required>
Введите содержание статьи
        </textarea>
        </label>
        <br>
        <input type="submit" value="Опубликовать">
    </form>
</center>
</body>
</html>