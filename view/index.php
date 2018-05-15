<html>
<head>
    <meta charset="utf-8">
    <title>Новости</title>
</head>
<body>
<table border="1" align="left">
    <tr>
        <?php foreach ($data as $value): ?>
        <tr>
        <td>
        <a href="/article.php?id=<?php echo $value['id']; ?>">
        <?php echo $value['title']; ?>
        </a>
        </td>
        <tr>
        <td>
        <?php echo $value['text']; ?>
        </td>
        <tr>
        <td>
        <a href="/edit.php?id=<?php echo $value['id']; ?>">Редактировать статью</a>
        </td>
        <td>
        <a href="delete.php?id=<?php echo $value['id']; ?>">Удалить статью</a>
        </td>
        </tr>
        <?php endforeach; ?>
    </tr>
</table>
<center><p><a href="add.php">Добавить статью</a></p></center>
</body>
</html>