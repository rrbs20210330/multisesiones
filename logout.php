<?php
session_start();
echo $_SESSION['user'];
$_SESSION['user'] = null;
$_SESSION['id'] = null;
session_unset();
session_destroy();
header('location:index.php');