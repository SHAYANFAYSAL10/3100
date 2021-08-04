<!DOCTYPE html>
<html>
    <head>
	    <title>
		    DU KA Unit Admission Test Circular
        </title>
    </head>
	<body>
        <?php
            include 'connection.php';

            $sql="SELECT pdf FROM du WHERE ID=1";
            $query=mysqli_query($con,$sql);
            while ($info=mysqli_fetch_array($query))
            {
        ?>
        <embed type="application/pdf" src="DU/<?php echo $info['pdf']; ?>" style="width:100%; height:1000px"></embed>
        <?php
            }
        ?>
    </body>
</html>