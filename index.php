<?php
require_once __DIR__ . '/model/article.php';
$data = Article_getAll();
require_once __DIR__ . '/view/index.php';