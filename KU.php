<!DOCTYPE html>
<html>
    <head>
	    <title>
		    KU Admission
        </title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="KU.css">
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
	
	    <h1 id="h-style">Khulna University</h1>
		</br>
		<div class="photo"><img src="KU.png"/></div>
		</br></br></br>
		<section>
		<div class="middle">
		<div class="middle-left">
		<h3>Circular</h3>
		<a href="KU_Circular.php" target="_blank">KU Admission Test Circular</br></a>
		<a href="KU_A_Circular.php" target="_blank">KU A Unit Admission Test Circular</br></a>
		<a href="KU_B_Circular.php" target="_blank">KU B Unit Admission Test Circular</br></a>
		<a href="KU_C_Circular.php" target="_blank">KU C Unit Admission Test Circular</br></a>
		<a href="KU_D_Circular.php" target="_blank">KU D Unit Admission Test Circular</br></a>
		<h3>Admission Fees</h3>
		<a href="https://kuadmission.online/fees" target="_blank">KU Admission Test Fees</br></a>
		<h3>Payment Procedure</h3>
		<a href="https://kuadmission.online/how-to-pay" target="_blank">KU Admission Test Payment Procedure</br></a>
		<h3>Seat Plan And Admission Centers</h3>
		<a href="https://kuadmission.online/exam-centers" target="_blank">KU Admission Test Seat Plan And Admission Centers</br></a>
		<h3>Result</h3>
		<a href="https://kuadmission.online/published/result" target="_blank">KU Admission Test Result</br></a>
		<h3>Official Website</h3>
		<a href="https://ku.ac.bd/undergraduate" target="_blank">Click here to go to official website</br></a>
		</div>
		
		
		
		<div class="map">
		    </br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3678.0070168755215!2d89.53173441491512!3d22.80220388506516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff85490c50d28f%3A0xadae6f7b93b7069a!2sKhulna%20University!5e0!3m2!1sen!2sbd!4v1619956298057!5m2!1sen!2sbd" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>		</div>
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