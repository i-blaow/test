<?php
require_once 'functions/sql.php';
$Link = $_GET['Link'];
if(isset($Link)) {
$sql = "SELECT * FROM news WHERE Link='$Link'";
$answer = sendQuery($sql);
require_once 'view/solo_new.php';
}

?>
