<!DOCTYPE html>
<html>
    <head>
        <title>RU admin panel</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="RU_admin.css">
    </head>
    <body>
    <?php
        session_start();
        if(!isset($_SESSION['AdminLoginId']))
        {
            header("location: admin_login.php");
        }

        ?>
	
    <header>
	        <div class="logo"><a href="#"><img src="Admission.jpg"></a></div>
			<div class="name">Admin Panel</div>
		    <div class="navbar">
		
		        
			
		        <div class="dropdown_container"><a href="admin_home.php">Home</a></div>
			
			    <div class="dropdown_container">
			        <a href="#">General</a>
			    	<div class="dropdown_content">
				        <a href="CU_admin.php">CU</a>
					    <a href="DU_admin.php">DU</a>
					    <a href="KU_admin.php">KU</a>
					    <a href="RU_admin.php">RU</a>
				    </div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Agricultural</a>
			    	<div class="dropdown_content">
				        <a href="Agri_admin.php">All Agri</a>
			    	</div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Engineering</a>
				    <div class="dropdown_content">
				        <a href="BUET_admin.php">BUET</a>
					    <a href="CUET_admin.php">CUET</a>
					    <a href="KUET_admin.php">KUET</a>
					    <a href="RUET_admin.php">RUET</a>
				    </div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Sci. & Tech.</a>
				    <div class="dropdown_content">
				        <a href="HSTU_admin.php">HSTU</a>
					    <a href="JUST_admin.php">JUST</a>
					    <a href="SUST_admin.php">SUST</a>
				    </div>
			    </div>
		    </div>
		</header>
		</br>
        <div class="logout_div">
            <a href="admin_logout.php" class="logout_btn">Logout</a>
        </div>
        </br>
	
	    <h1 id="h-style">Rajshahi University</h1>
		</br>
		<div class="photo"><img src="RU.png"/></div>
		</br></br></br>
        <div class="pdf_div">
        <form class="pdf" action="RU_admin.php" method="post" enctype="multipart/form-data">
            <h1>Insert</h1>
            <input class="pdf_id" type="text" placeholder="ID" name="id1">
            <input class="upload_box" type="file" name="pdf" value="" required>
            <input class="pdf_submit" type="submit" name="submit1" value="Upload">
            <?php
                include 'connection.php';
                if(isset($_POST['submit1']))
                {
                    $pdf=$_FILES['pdf']['name'];
                    $pdf_type=$_FILES['pdf']['type'];
                    $pdf_size=$_FILES['pdf']['size'];
                    $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                    $pdf_store="RU/".$pdf;

                    move_uploaded_file($pdf_tem_loc,$pdf_store);
                    $sql="INSERT INTO ru(ID,pdf) values($_POST[id1],'$pdf')";
                    $query=mysqli_query($con,$sql);
                }
            ?>
        </form>
        </div>
        <div class="pdf_div">
        <form class="pdf" action="RU_admin.php" method="post" enctype="multipart/form-data">
            <h1>Update</h1>
            <input class="pdf_id" type="text" placeholder="ID" name="id2"></br></br>
            <input class="upload_box" type="file" name="pdf" value="" required></br></br>
            <input class="pdf_submit" type="submit" name="submit2" value="Update">
            <?php
                include 'connection.php';
                if(isset($_POST['submit2']))
                {
                    $pdf=$_FILES['pdf']['name'];
                    $pdf_type=$_FILES['pdf']['type'];
                    $pdf_size=$_FILES['pdf']['size'];
                    $pdf_tem_loc=$_FILES['pdf']['tmp_name'];
                    $pdf_store="RU/".$pdf;

                    move_uploaded_file($pdf_tem_loc,$pdf_store);
                    $sql="UPDATE `ru` SET `pdf`='$pdf' WHERE ID=$_POST[id2]";
                    $query=mysqli_query($con,$sql);
                }
            ?>
        </form>
        </div>
        <div class="pdf_div">
        <form class="pdf" action="RU_admin.php" method="post" enctype="multipart/form-data">
            <h1>Delete</h1>
            <input class="pdf_id" type="text" placeholder="ID" name="id3"></br></br>
            <input class="pdf_submit" type="submit" name="submit3" value="Delete">
            <?php
                include 'connection.php';
                if(isset($_POST['submit3']))
                {
                    $sql="DELETE FROM `ru` WHERE ID=$_POST[id3]";
                    $query=mysqli_query($con,$sql);
                }
            ?>
        </form></br></br>
        </div>
    </body>
</html>