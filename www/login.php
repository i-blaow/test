<?php
session_start();
require_once 'models/sql.php';
require_once 'functions/login.php';
require_once 'functions/reg.php';
if(isUser()) {
    header('Location: http://test1.local/index.php');
} else {
    sign_in();
    require_once 'view/login.php';
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</html>