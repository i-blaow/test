<html>
<head>
    <meta charset="utf-8">
    <?php if (!is_array($data)){
        echo $data;
        die;
    } ?>
    <title><?php echo $data['title']; ?></title>
</head>
<body>
<table border="1" align="left">
    <tr>
        <tr>
        <td><?php echo $data['title']; ?></td>
        <tr>
        <td><?php echo $data['text']; ?></td>
    </tr>
</table>
</body>
</html>