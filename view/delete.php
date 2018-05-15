<html>
<head>
    <meta charset="utf-8">
    <?php if (!is_array($data)){
        echo $data;
        die;
    } ?>
    <title>Удалить новость</title>
</head>
<body>
<center>
    <form action="/delete.php?id=<?php echo $_GET['id']; ?>" method="post">
<p>Вы действительно хотите удалить новость:</p>
    <?php echo $data['title']; ?>
    <br>
    <br>
    <input type="text" hidden name="delete" value="delete">
    <input type="submit" value="Удалить">
    </form>
</center>
</body>
</html>