<?php
session_start();
if ($_SESSION['level'] != "admin") {
    header("location:login-form.php");
}
?>
