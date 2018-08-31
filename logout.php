<?php
session_start();
unset($_SESSION['islogin']);
session_destroy();
header("location: index.php")
?>