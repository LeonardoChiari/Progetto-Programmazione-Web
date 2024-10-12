<?php

session_start();
//setcookie($_SESSION['username'], "", time() -3600);
$_SESSION['loggato']= false;
$_SESSION = array();

session_destroy();

header("location: index.php");
exit;
?>