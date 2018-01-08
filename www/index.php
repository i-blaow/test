<?php
session_start();
require_once __DIR__ . '/models/sql.php';
require_once __DIR__ . '/functions/reg.php';
if(isUser()) {
    if(isset($_SESSION['notifications'][0])) {
            echo $_SESSION['notifications'][0];
            unset($_SESSION['notifications']);
    }
}
require_once 'view/index.php';



