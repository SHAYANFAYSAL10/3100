<!DOCTYPE html>
<html>
    <head>
	    <title>
		    Admission test BD
        </title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="user.css">
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
	
	    <h1 id="h-style">Admission Test BD</h1>
		
		</br>
		
		<section>
		    <div class="outer_div">
		        <div class="inner_div">
			        <a href="Agri.php">
				        <img class="pictures" src="Agri_BAU.png"/>
					    <div class="image__overlay">
					        <p>Agri</p>
					    </div>
    				</a>
	    		</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="BUET.php">
			    	    <img class="pictures" src="BUET.png"/>
				    	<div class="image__overlay">
					        <p>BUET</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="CU.php">
			    	    <img class="pictures" src="CU.png"/>
				    	<div class="image__overlay">
					        <p>CU</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="CUET.php">
				        <img class="pictures" src="CUET.png"/>
					    <div class="image__overlay">
					        <p>CUET</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="DU.php">
				        <img class="pictures" src="DU.png"/>
					    <div class="image__overlay">
					        <p>DU</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="HSTU.php">
				        <img class="pictures" src="HSTU.png"/>
					    <div class="image__overlay">
					        <p>HSTU</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="JUST.php">
			    	    <img class="pictures" src="JUST.jpg"/>
				    	<div class="image__overlay">
					        <p>JUST</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="KU.php">
			    	    <img class="pictures" src="KU.png"/>
				    	<div class="image__overlay">
					        <p>KU</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="KUET.php">
			    	    <img class="pictures" src="KUET.png"/>
				    	<div class="image__overlay">
					        <p>KUET</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="RU.php">
				        <img class="pictures" src="RU.png"/>
					    <div class="image__overlay">
					        <p>RU</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div x_position_1">
	    	    <div class="inner_div">
		    	    <a href="RUET.php">
			    	    <img class="pictures" src="RUET.png"/>
				    	<div class="image__overlay">
					        <p>RUET</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div x_position_1">
	    	    <div class="inner_div">
		    	    <a href="SUST.php">
			    	    <img class="pictures" src="SUST.png"/>
				    	<div class="image__overlay">
					        <p>SUST</p>
    					</div>
	    			</a>
		    	</div>
	    	</div>
		</section>
		
		
		
		<h1 class="admin_related">Admin Panel</h1>
		<a class="admin_related_link" href="admin_login.php">Login</a></br></br></br>
		
		
		
		
		
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