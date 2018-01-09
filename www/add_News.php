<?php
require_once 'view/add_News.php';
require_once 'models/sql.php';
if(isset($_POST['title']) && isset($_POST['text'])) {
    if (add_New()) {
        echo 'TRUE';
    }
}
?>

