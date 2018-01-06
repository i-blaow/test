<?php
require __DIR__ . '/../models/sql.php';
$all_info = get_AllNews();
foreach ($all_info as $value) {
    echo $value['id'] . '<br>';
}