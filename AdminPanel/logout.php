<?php
ob_start();
session_start();
session_destroy();
setcookie("cerez", "", time() - 1);
setcookie("nocerez", "", time() - 1);
header("location:../index.php")
?>