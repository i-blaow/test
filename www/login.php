<?php
require_once 'models/sql.php';
require_once 'functions/login.php';
require_once 'functions/reg.php';
if(isUser()) {
    echo 'Привет, ' . $_COOKIE['login'];
} else {
    sign_in();
    include_once 'view/login.php';
}
?>
