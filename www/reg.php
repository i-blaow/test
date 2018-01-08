<?php

if(isset($_COOKIE['login']) && isset($_COOKIE['token'])) {
    header('Location: http://test1.local/index.php');
}
require __DIR__ . '/view/reg.php';
