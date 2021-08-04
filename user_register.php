<!DOCTYPE html>
<html>
    <head>
        <title>User register</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <form class="login" method="POST">
        <h1>Register</h1>
            <input type="text" placeholder="User Name" name="name">
            <input type="text" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="password">
            <button type="submit" name="Login">Register</button>
        </form>

        <?php
       
        if(isset($_POST['Login']))
        {
            include 'connection.php';
            $check_email_query="SELECT email FROM `user` WHERE email='$_POST[email]' LIMIT 1";
            $check_email_query_run=mysqli_query($con,$check_email_query);
            if(mysqli_num_rows($check_email_query_run)>0)
            {
                echo"<script>alert('Email alredy in use.');</script>";
            }
            else
            {
                include 'connection.php';
                $check_name_query="SELECT name FROM `user` WHERE name='$_POST[name]' LIMIT 1";
                $check_name_query_run=mysqli_query($con,$check_name_query);
                if(mysqli_num_rows($check_name_query_run)>0)
                {
                    echo"<script>alert('User name alredy in use.Change user name.');</script>";
                }
                else
                {
                    include 'connection.php';
                    $sql="INSERT INTO user(name,password,email) values('$_POST[name]','$_POST[password]','$_POST[email]')";
                    $query=mysqli_query($con,$sql);
                    header("location: user_login.php");
                }
            }
        }

        ?>
    </body>
</html>