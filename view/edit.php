<html>
<head>
    <meta charset="utf-8">
    <?php if (!is_array($data)){
        echo $data;
        die;
    } ?>
    <title>Редактировать новость</title>
</head>
<body>
<center>
    <form action="/edit.php?id=<?php echo $_GET['id']; ?>" method="post">
        <label>
            <textarea name="title" cols="30" rows="10" required>
<?php echo $data['title']; ?>
            </textarea>
        </label>
        <br>
        <br>
        <label>
        <textarea name="text" cols="50" rows="20" required>
<?php echo $data['text']; ?>
        </textarea>
        </label>
        <br>
        <input type="submit" value="Изменить">
    </form>
</center>
</body>
</html>