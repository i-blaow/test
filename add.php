<?php
if (!empty($_POST['title']) && !empty($_POST['text'])) {
    $data = ['title' => $_POST['title'], 'text' => $_POST['text']];
    require_once __DIR__ . '/model/article.php';
    Article_insert($data);
} else {
    require_once __DIR__ . '/view/add.php';
}