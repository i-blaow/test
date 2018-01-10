<?php
require_once 'view/add_News.php';
require_once 'models/sql.php';
if(isset($_POST['title']) && isset($_POST['text'])) {
    add_New();
}
?>

