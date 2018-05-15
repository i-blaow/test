<?php
require_once __DIR__ . '/model/article.php';
if (!empty($_POST['title']) && !empty($_POST['text'])){
    $data_for_article = ['title' => $_POST['title'], 'text' => $_POST['text']];
    Article_edit($_GET['id'], $data_for_article);
} else {
    $data = Article_getOne($_GET['id']);
    require_once __DIR__ . '/view/edit.php';
}