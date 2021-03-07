<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>ERMS | My Experiece</title>
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
							<a class="current" href="User_myexp.php">My Experience</a>
							<a href="User_myedu.php">My Education</a>		
						</div>					
				  	</li>
				  	<li class="dropdown">
				    	<a href="javascript:void(0)" class="dropbtn">Edit Info</a>
				    	<div class="dropdown-content">
							<a class="current" href="User_editexp.php">Edit My Experience</a>	
							<a href="User_editeduc.php">Edit my Education</a>
						</div>					
				  	</li>
				  	<li class="dropdown">
							<a href="logout.php">Logout</a>
						</div>
                    </li>
				</ul>
	    	</nav>       		
		</div>
		</header>
		<div class="main-section">
				<h1>My Experience</h1>
						<form action="userexpin.php" method="post">
							<label>First Employer Name</label>
								<input type="text" class="form-control form-control-user" id="emp1name" name="emp1name" />
								<br>
							<label>Employer Designation</label>
								<input type="text" class="form-control form-control-user" id="emp1des" name="emp1des"/> 
								<br>
							<label>Employer CTC</label>
								<input type="text" class="form-control form-control-user" id="emp1ctc" name="emp1ctc"/> 
								<br>
							<label>Employer Work Duration</label>
                            <input type="text" class="form-control form-control-user" id="emp1wd" name="emp1wd"/>
								<br>
							<label>Second Employer Name</label>		  
								<input type="text" class="form-control form-control-user" id="emp2name" name="emp2name" />
								<br>
							<label>Employer Designation</label>   
								<input type="text" class="form-control form-control-user" id="emp2des" name="emp2des"/>
								<br>
							<label>Employer CTC</label> 		   
								<input type="text" class="form-control form-control-user" id="emp2ctc" name="emp2ctc"/>
								<br>
							<label>Employer Work Duration</label> 
                            <input type="text" class="form-control form-control-user" id="emp2wd" name="emp2wd"/>
								<br>					
							<label>Thrid Employer Name</label>          
								<input type="text" class="form-control form-control-user" id="emp3name" name="emp3name"/>
								<br>
							<label>Employer Designation</label>   
								<input type="text" class="form-control form-control-user" id="emp3des" name="emp3des"/>
								<br>
							<label>Employer CTC</label>            
								<input type="text" class="form-control form-control-user" id="emp3ctc" name="emp3ctc"/>
								<br>
							<label>Employer Work Duration</label>  
								<input type="text" class="form-control form-control-user" id="emp3wd" name="emp3wd"/>
								<br>
							<button type="submit" name="submit" value="submit"> Submit work experience </button>
								</br>
						</form>	
					</div>
				</div>
			</div>
		</section>
	</body>
</html>

