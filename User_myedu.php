<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>ERMS | My Education</title>
		<link rel="stylesheet" type="text/css" href="css/userStyle.css">
	</head>
	
	<body>
		<header>
	    <div class="container">
	    	<div id="erms">
	    		<h1><span class="highlight">ERMS</span>system</h1>
	    	</div>
	    	<nav>
		    	<ul>
				  	<li><a href="User_welcome.html">Home</a></li>
				  	<li class="dropdown">
				  		<a href="javascript:void(0)" class="dropbtn">My Info</a>
				    	<div class="dropdown-content">
							<a href="User_myexp.php">My Experience</a>
							<a class="current" href="User_myedu.php">My Education</a>		
						</div>					
				  	</li>
				  	<li class="dropdown">
				    	<a href="javascript:void(0)" class="dropbtn">Edit Info</a>
				    	<div class="dropdown-content">
							<a href="User_editexp.php">Edit My Experience</a>	
							<a href="User_editeduc.php">Edit my Education</a>
						</div>					
				  	</li>
				  	<li class="dropdown">
							<a href="logout.php">Logout</a>
						</div>
					<li>
				</ul>
	    	</nav>       		
		</div>
		</header>
		
			<div class="main-section">
				<h1>My Education</h1>
			</div>
					<div class="container">
						<div class="myExpScreen">
								<form action="usereducin.php" method="post">
									<label>Senior HS Graduate</label>
										<input type="text" class="form-control form-control-user" id="grad1" name="grad1" />
										<br>
									<label>Schhool Address</label>
										<input type="text" class="form-control form-control-user" id="sadd1" name="sadd1"/> 
										<br>
									<label>Strand</label>          
										<input type="text" class="form-control form-control-user" id="strand" name="strand"/>
										<br>
									<label>Collge Graduate</label>		  
										<input type="text" class="form-control form-control-user" id="grad2" name="grad2"/>
										<br>	
									<label>School Address</label> 		   
										<input type="text" class="form-control form-control-user" id="sadd2" name="sadd2"/>
										<br>	
									<label>Course</label>          
										<input type="text" class="form-control form-control-user" id="course" name="course"/>
										<br>
									<label>Post Collge Grad.</label>		  
										<input type="text" class="form-control form-control-user" id="grad3" name="grad3"/>
										<br>	
									<label>School Address</label> 		   
										<input type="text" class="form-control form-control-user" id="sadd3" name="sadd3"/>
										<br>	
									<label>Course</label>          
										<input type="text" class="form-control form-control-user" id="course2" name="course2"/>
										<br>
									<button type="submit" name="submit" value="submit"> Submit my education </button>
								</form>		
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="my-edu">
		</div>
	</body>	
</html>