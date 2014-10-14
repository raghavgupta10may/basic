<?php
session_start();
session_destroy();
echo "successfully logged out!";
header("refresh:2;url=home.php");
?>