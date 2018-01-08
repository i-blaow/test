<?php

session_start();
foreach ($_SESSION['notifications'] as $notification) {
    echo $notification;
}
    unset($_SESSION['notifications']);
