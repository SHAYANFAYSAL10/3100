<!DOCTYPE html>
<?php
require("connection.php");
?>
<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <form class="login" method="POST">
            <h1>Login</h1>
            <input type="text" placeholder="Admin Name" name="name">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="Login">Login</button>
            
        </form>

        <?php
       
        if(isset($_POST['Login']))
        {
            $query="SELECT * FROM `admin` WHERE Name='$_POST[name]' AND Password='$_POST[password]'";
            $result=mysqli_query($con,$query);
            if(mysqli_num_rows($result)==1)
            {
                session_start();
                $_SESSION['AdminLoginId']=$_POST['name'];
                header("location: admin_home.php");
            }
            else
            {
                echo"<script>alert('Incorrect Admin Name or Password');</script>";
            }
        }

        ?>
    </body>
</html>