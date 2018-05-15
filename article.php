<?php
require_once __DIR__ . '/model/article.php';
$data = Article_getOne($_GET['id']);
require_once __DIR__ . '/view/article.php';