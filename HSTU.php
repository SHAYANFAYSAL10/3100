<!DOCTYPE html>
<html>
    <head>
	    <title>
		    HSTU Admission
        </title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="HSTU.css">
    </head>
	<body>
	
    <?php
        session_start();
        if(!isset($_SESSION['UserLoginId']))
        {
            header("location: user_login.php");
        }

    ?>
	
	
	
	
	    <header>
	        <div class="logo"><a href="#"><img src="Admission.jpg"></a></div>
			<div class="name">Admission Test BD</div>
		    <div class="navbar">
		
		        
			
		        <div class="dropdown_container"><a href="user_home.php">Home</a></div>
			
			    <div class="dropdown_container">
			        <a href="#">General</a>
			    	<div class="dropdown_content">
				        <a href="CU.php">CU</a>
					    <a href="DU.php">DU</a>
					    <a href="KU.php">KU</a>
					    <a href="RU.php">RU</a>
				    </div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Agricultural</a>
			    	<div class="dropdown_content">
				        <a href="Agri.php">All Agri</a>
			    	</div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Engineering</a>
				    <div class="dropdown_content">
				        <a href="BUET.php">BUET</a>
					    <a href="CUET.php">CUET</a>
					    <a href="KUET.php">KUET</a>
					    <a href="RUET.php">RUET</a>
				    </div>
			    </div>
			
			    <div class="dropdown_container">
			        <a href="#">Sci. & Tech.</a>
				    <div class="dropdown_content">
				        <a href="HSTU.php">HSTU</a>
					    <a href="JUST.php">JUST</a>
					    <a href="SUST.php">SUST</a>
				    </div>
			    </div>
		    </div>
		</header>
	
	    </br>

        <div class="logout_div">
            <a href="user_logout.php" class="logout_btn">Logout</a>
        </div>
		</br>
	
	    <h1 id="h-style">Hajee Mohammad Danesh Science and Technology University</h1>
		</br>
		<div class="photo"><img src="HSTU.png"/></div>
		</br></br></br>
		<section>
		<div class="middle">
		<div class="middle-left">
		<h3>Circular</h3>
		<a href="HSTU_Circular.php" target="_blank">HSTU Admission Test Circular</br></a>
		<h3>Routine</h3>
		<a href="HSTU_Routine.php" target="_blank">HSTU Admission Test Routine</br></a>
		<h3>Seat Plan</h3>
		<a href="HSTU_A1.php" target="_blank">HSTU A Unit Shift 1 Seat Plan</br></a>
		<a href="HSTU_A2.php" target="_blank">HSTU A Unit Shift 2 Seat Plan</br></a>
		<a href="HSTU_A3.php" target="_blank">HSTU A Unit Shift 3 Seat Plan</br></a>
		<a href="HSTU_A4.php" target="_blank">HSTU A Unit Shift 4 Seat Plan</br></a></br>
		<a href="HSTU_B1.php" target="_blank">HSTU B Unit Shift 1 Seat Plan</br></a>
		<a href="HSTU_B2.php" target="_blank">HSTU B Unit Shift 2 Seat Plan</br></a>
		<a href="HSTU_B3.php" target="_blank">HSTU B Unit Shift 3 Seat Plan</br></a>
		<a href="HSTU_B4.php" target="_blank">HSTU B Unit Shift 4 Seat Plan</br></a></br>
		<a href="HSTU_C1.php" target="_blank">HSTU C Unit Shift 1 Seat Plan</br></a>
		<a href="HSTU_C2.php" target="_blank">HSTU C Unit Shift 2 Seat Plan</br></a>
		<a href="HSTU_C3.php" target="_blank">HSTU C Unit Shift 3 Seat Plan</br></a></br>
		<a href="HSTU_D1.php" target="_blank">HSTU D Unit Shift 1 Seat Plan</br></a>
		<a href="HSTU_D2.php" target="_blank">HSTU D Unit Shift 2 Seat Plan</br></a>
		<a href="HSTU_D3.php" target="_blank">HSTU D Unit Shift 3 Seat Plan</br></a>
		<a href="HSTU_D4.php" target="_blank">HSTU D Unit Shift 4 Seat Plan</br></a>
		<h3>Result</h3>
		<a href="HSTU_A.php" target="_blank">HSTU A Unit Result</br></a>
		<a href="HSTU_B.php" target="_blank">HSTU B Unit Result</br></a>
		<a href="HSTU_C.php" target="_blank">HSTU C Unit Result</br></a>
		<a href="HSTU_D.php" target="_blank">HSTU D Unit Result</br></a>
		<a href="HSTU_Players.php" target="_blank">HSTU Players and Disabled Quota Result</br></a>
		<h3>Official Website</h3>
		<a href="https://hstu.ac.bd/admission" target="_blank">Click here to go to official website</br></a>
		</div>
		
		
		
		<div class="map">
		    </br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3595.1734626403168!2d88.6539820149721!3d25.698680183665374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e4ad0b5d200fa7%3A0x2e0c8f8bb049efa2!2sHajee%20Mohammad%20Danesh%20Science%20%26%20Technology%20University!5e0!3m2!1sen!2sbd!4v1619953527003!5m2!1sen!2sbd" width="600" height="900" style="border:0;" allowfullscreen="" loading="lazy"></iframe>		</div>
		</div>
		</section>
		</br></br></br></br>
		
		
		
		
		
		
		
		
		
		
		
		
		
		<section>
		    <div class="footer">
		        <div class="about">
				    <h2>About me</h2>
				    <p>
    				    I am a student of</br>
	    			    Rajshahi University</br>
		    		    of Engineering & </br>
			    	    technology. I am </br>
				        studing CSE.
				    </p>
			    </div>
				<div class="links">
				    </br></br></br>
				    <div class="button">
					    <a href="https://www.facebook.com/" target="_blank">
					        <div class="icon"><i class="fa fa-facebook" aria-hidden="true"></i></div>
						    <span>Facebook</span>
						</a>
					</div>
					
					<div class="button">
					    <a href="https://twitter.com/" target="_blank">
					        <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i></div>
						    <span>Twitter</span>
						</a>
					</div>
					
				    <div class="button">
					    <a href="https://www.instagram.com/" target="_blank">
					        <div class="icon"><i class="fa fa-instagram" aria-hidden="true"></i></div>
						    <span>Instragram</span>
						</a>
					</div>
					
					<div class="button">
					    <a href="https://github.com/" target="_blank">
					        <div class="icon"><i class="fa fa-github" aria-hidden="true"></i></div>
						    <span>Github</span>
						</a>
					</div>
					
					<div class="button">
					    <a href="https://www.youtube.com/" target="_blank">
					        <div class="icon"><i class="fa fa-youtube-play" aria-hidden="true"></i></div>
						    <span>Youtube</span>
						</a>
					</div>
					
			    </div>
    		    <div class="footer_bottom">
	    		    &copy;All rights reserved to S.M.Faysal Alam
		    	</div>
		    </div>
		
		</section>
	</body>
</html>