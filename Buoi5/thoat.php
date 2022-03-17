<?php
session_start();
unset($_SESSION["name"]);
unset($_SESSION["value"]);
header("Location:login.php");
?>