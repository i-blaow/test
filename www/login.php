<?php
session_start();
require_once 'models/sql.php';
require_once 'functions/login.php';
require_once 'functions/reg.php';
if(isUser()) {
    header('Location: http://test1.local/index.php');
} else {
    sign_in();
    include_once 'view/login.php';
}
?>
