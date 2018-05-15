<?php
require_once __DIR__ . '/model/article.php';
if (!empty($_POST['delete'])) {
    Article_delete($_GET['id']);
} else {
    $data = Article_getOne($_GET['id']);
    require_once __DIR__ . '/view/delete.php';
}