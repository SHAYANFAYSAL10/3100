<!DOCTYPE html>
<html>
    <head>
	    <title>
		    RU Admission Test Conditions for Different Units
        </title>
    </head>
	<body>
        <?php
            include 'connection.php';

            $sql="SELECT pdf FROM ru WHERE ID=2";
            $query=mysqli_query($con,$sql);
            while ($info=mysqli_fetch_array($query))
            {
        ?>
        <embed type="application/pdf" src="RU/<?php echo $info['pdf']; ?>" style="width:100%; height:1000px"></embed>
        <?php
            }
        ?>
    </body>
</html>