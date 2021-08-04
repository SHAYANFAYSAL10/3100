<?php
    session_start();
    unset($_SESSION['UserLoginId']);
    header("location: user_login.php");

?>