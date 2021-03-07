<?php

    require_once 'connect.php';

    $username = $password = $confirmPassword = '';
    $usernameErr = $passwordErr = $confirmPasswordErr = '';

	//Username
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty(trim($_POST['username']))) {
            $usernameErr = 'Please enter a username';
        } else {
            $sql = 'SELECT * FROM users WHERE username = ?';
            $statement = mysqli_prepare($link, $sql);
            if ($statement) {
                mysqli_stmt_bind_param($statement, 's', $paramUsername);
                $paramUsername = trim($_POST['username']);
                if (mysqli_stmt_execute($statement)) {
                    mysqli_stmt_store_result($statement);

                    if (mysqli_stmt_num_rows($statement) == 1) {
                        $usernameErr = 'This username is already taken';
                    } else {
                        $username = $paramUsername;
                    }
                } else {
                  echo 'Oops! Something went wrong';
                }
            }
            mysqli_stmt_close($statement);
        }
		//Password
        if (empty(trim($_POST['password']))) {
            $passwordErr = 'Please enter a password';
        } elseif (strlen(trim($_POST['password'])) < 6) {
            $passwordErr = 'Password must have 6 characters';
        } else {
            $password = trim($_POST['password']);
        }

        if (empty(trim($_POST['confirm_password']))) {
            $confirmPasswordErr = 'Please enter a confirm password';
        } else {
            $confirmPassword = trim($_POST['confirm_password']);
            if (empty($passwordErr) && ($password != $confirmPassword)) {
                $confirmPasswordErr = 'Password did not match.';
            }
        }

        if (empty($usernameErr) && empty($passwordErr) && empty($confirmPasswordErr)) {
            $sql = 'INSERT INTO users (username, password) VALUES (?, ?)';
            $statement = mysqli_prepare($link, $sql);
            if ($statement) {
                mysqli_stmt_bind_param($statement, 'ss', $paramUsername, $paramPassword);

                $paramUsername = $username;
                $paramPassword = password_hash($password, PASSWORD_DEFAULT);

                if (mysqli_stmt_execute($statement)) {
                    header('login.php');
                } else {
                    echo 'Something went wrong. Please try again later.';
                }

                mysqli_stmt_close($statement);
            }
        }
    }

    mysqli_close($link);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ERMS | Signup</title>
		<link rel="stylesheet" type="text/css" href="css/signupStyle.css">
	</head>
	
	<body>
		<header>
		<div id="titlePage">
			<h1>Employee Record Management System</h1>				
		</div>
		</header>	
		<div class="signUp">
			<div class="signUpScreen">
				<div class="appTitle">
					<h2>Create your New Account</h2>					
				</div>

				<div class="signUpForm">		
					
					<form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
      				<div class="form-group <?= !empty($usernameErr) ? 'has-error' : ''; ?>">
        			<label>Username</label>
        			<input type="text" name="username" class="form-control" value="<?= $username ?>">
        			<span class="help-block"><?= $usernameErr ?></span>
      				</div>

      				<div class="form-group <?= !empty($passwordErr) ? 'has-error' : ''; ?>">
        			<label>Password</label>
        			<input type="password" name="password" class="form-control" value="">
        			<span class="help-block"><?= $passwordErr ?></span>
      				</div>

      				<div class="form-group <?= !empty($confirmPasswordErr) ? 'has-error' : ''; ?>">
        			<label>Confirm Password</label>
        			<input type="password" name="confirm_password" class="form-control" value="">
        			<span class="help-block"><?= $confirmPasswordErr ?></span>
      				</div>
						
						<div class="form-group">
        				<input type="submit" class="btn btn-primary" value="Submit">
						</div>

						<div>
						<p class="loginLink">Already have an account? <a href="login.php">Login</a></p>
						</div>
						
					</form>
				</div> 
			</div> 		
		</div> 
	</body> 	
</html>
	