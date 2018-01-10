
<html>
<head>
    <link rel="stylesheet" href="../bootstrap-4.0.0-beta.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../view/css/main.css">
<title>
    <?php echo $Link; ?>
</title>
</head>

<body>
<div class="col col-auto text-justify">
    <h3><?php echo $answer[0]['title']; ?></h3>
    <img src="<?php echo $answer[0]['PhotoLink']; ?>">
    <p><?php echo $answer[0]['TextFull']; ?></p>
    <a href="../index.php">На главную</a>
</div>


</body>
</html>