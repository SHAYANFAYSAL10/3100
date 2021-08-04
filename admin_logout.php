<?php
    session_start();
    unset($_SESSION['AdminLoginId']);
    header("location: admin_login.php");

?>