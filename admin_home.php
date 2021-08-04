<!DOCTYPE html>
<html>
    <head>
	    <title>
		    Admin Panel
        </title>
		<link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Zen+Dots&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<link rel="stylesheet" type="text/css" href="admin.css">
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
	
	    <h1 id="h-style">Admin Panel</h1>
		
		</br>
		
		<section>
		    <div class="outer_div">
		        <div class="inner_div">
			        <a href="Agri_admin.php">
				        <img class="pictures" src="Agri_BAU.png"/>
					    <div class="image__overlay">
					        <p>Agri</p>
					    </div>
    				</a>
	    		</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="BUET_admin.php">
			    	    <img class="pictures" src="BUET.png"/>
				    	<div class="image__overlay">
					        <p>BUET</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="CU_admin.php">
			    	    <img class="pictures" src="CU.png"/>
				    	<div class="image__overlay">
					        <p>CU</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="CUET_admin.php">
				        <img class="pictures" src="CUET.png"/>
					    <div class="image__overlay">
					        <p>CUET</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="DU_admin.php">
				        <img class="pictures" src="DU.png"/>
					    <div class="image__overlay">
					        <p>DU</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="HSTU_admin.php">
				        <img class="pictures" src="HSTU.png"/>
					    <div class="image__overlay">
					        <p>HSTU</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="JUST_admin.php">
			    	    <img class="pictures" src="JUST.jpg"/>
				    	<div class="image__overlay">
					        <p>JUST</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="KU_admin.php">
			    	    <img class="pictures" src="KU.png"/>
				    	<div class="image__overlay">
					        <p>KU</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
    		<div class="outer_div">
	    	    <div class="inner_div">
		    	    <a href="KUET_admin.php">
			    	    <img class="pictures" src="KUET.png"/>
				    	<div class="image__overlay">
					        <p>KUET</p>
    					</div>
	    			</a>
		    	</div>
    		</div>
		
	    	<div class="outer_div">
		        <div class="inner_div">
			        <a href="RU_admin.php">
				        <img class="pictures" src="RU.png"/>
					    <div class="image__overlay">
					        <p>RU</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div x_position_1">
	    	    <div class="inner_div">
		    	    <a href="RUET_admin.php">
			    	    <img class="pictures" src="RUET.png"/>
				    	<div class="image__overlay">
					        <p>RUET</p>
    					</div>
	    			</a>
		    	</div>
		    </div>
		
    		<div class="outer_div x_position_1">
	    	    <div class="inner_div">
		    	    <a href="SUST_admin.php">
			    	    <img class="pictures" src="SUST.png"/>
				    	<div class="image__overlay">
					        <p>SUST</p>
    					</div>
	    			</a>
		    	</div>
	    	</div>
		</section>

		<h1 class="admin_related">Add new admin</h1>
		<a class="admin_related_link" href="admin_register.php">Register</a></br></br></br>
		
		
	</body>
</html>