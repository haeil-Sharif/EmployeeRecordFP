<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		<title>ERMS | Edit My Experience</title>
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
				  	<li class="current"><a href="User_welcome.html">Home</a></li>
				  	<li class="dropdown">
				    	<a href="javascript:void(0)" class="dropbtn">My Info</a>
				    	<div class="dropdown-content">
							<a href="User_myexp.php">My Experience</a>
							<a href="User_myedu.php">My Education</a>		
						</div>					
				  	</li>
				  	<li class="dropdown">
				    	<a href="javascript:void(0)" class="dropbtn">Edit Info</a>
				    	<div class="dropdown-content">
							<a class="current" href="User_editexp.html">Edit My Experience</a>	
							<a href="User_editeduc.php">Edit my Education</a>
						</div>					
				  	</li>
				  	<li class="dropdown">
							<a href="logout.html">Logout</a>
						</div>
					</li>
				</ul>
	    	</nav>       		
		</div>
		</header>
		
		<div class="main-section">
			<h1>Edit My Experience</h1>
		</div>
		
		<div class="profile-update">
			<form action="" method="">
				<label>First Employer Name</label> <input type="text"/>
					<br>
				<label>Former Designation</label> <input type="text"/> 
					<br>
				<label>Employer CTC</label> <input type="text"/> 
					<br>
				<label>Employer Work Duration</label> <input type="text" name="work"> <input type="submit">
					<br>							
				<label>Second Employer Name</label> <input type="text" />
					<br>
				<label>Employer Designation</label> <input type="text"/>
					<br>
				<label>Employer CTC</label> <input type="text"/>
					<br>
				<label>Employer Work Duration</label> <input type="text" name="work"> <input type="submit">
					<br>				
				<label>Third Employer Name</label> <input type="text" />
					<br>
				<label>Employer Designation</label> <input type="text"/>					<br>
				<label>Employer CTC</label> <input type="text"/>
					<br>
				<label>Employer WorkDuration</label> <input type="text" name="work"> <input type="submit">
					<br>
				<br>
				<input type="submit" value="Update"/>
			</form>
		</div>
		
	</body>
	
	
</html>