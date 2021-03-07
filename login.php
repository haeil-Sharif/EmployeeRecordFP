<?php

    session_start();

    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
        header('location: User_welcome.php');
        exit;
    }

    require_once 'connect.php';

    $username = $password = '';
    $usernameErr = $passwordErr = $errorMessage = '';

  
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        if (empty(trim($_POST['username']))) {
            $usernameErr = 'Please enter username';
        } else {
            $username = trim($_POST['username']);
        }


        if (empty(trim($_POST['password']))) {
            $passwordErr = 'Please enter your password';
        } else {
            $password = trim($_POST['password']);
        }


        if (empty($usernameErr) && empty($passwordErr)) {
  
            $sql = 'SELECT id, username, password FROM users WHERE username = ?';
            $statement = mysqli_prepare($link, $sql);
            if ($statement) {
                mysqli_stmt_bind_param($statement, 's', $paramUsername);

          
                $paramUsername = $username;


                if (mysqli_stmt_execute($statement)) {
   
                    mysqli_stmt_store_result($statement);

                    if (mysqli_stmt_num_rows($statement) == 1) {
                      
                        mysqli_stmt_bind_result($statement, $id, $username, $hashedPassword);

                        if (mysqli_stmt_fetch($statement)) {
                            if (password_verify($password, $hashedPassword)) {

                                session_start();

              
                                $_SESSION['loggedIn'] = true;
                                $_SESSION['id'] = $id;
                                $_SESSION['username'] = $username;

            
                                header('location: User_welcome.php');
                            } else {
                    
                                $errorMessage = 'The username or password you entered is not valid';
                            }
                        }
                    } else {

                        $errorMessage = 'The username or password you entered is not valid';
                    }
                } else {
                    echo "ERROR: Hush! Sorry. " ;
                }

               
                mysqli_stmt_close($statement);
            }
        }

        mysqli_close($link);
    }
    ?>
<!DOCTYPE html>
<html>
  <head>
    <title>ERMS | Login</title>
    <link rel="stylesheet" type="text/css" href="css/loginStyle.css">
  </head>

  <body>
  <header>
    <div id="titlePage">
      <h1>Employee Record Management System</h1>        
    </div>
  </header>
    <div class="login">
      <div class="loginScreen">
        <div class="appTitle">
          <h2>Welcome!</h1>
        </div>

      <div class="loginForm">
      <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
                <div class="form-group <?= (!empty($errorMessage) || !empty($usernameErr)) ? 'has-error' : ''; ?>">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" value="<?= $username ?>">
                    <span class="help-block"><?= $usernameErr ?></span>
                </div>
                <div class="form-group <?= (!empty($errorMessage) || !empty($passwordErr)) ? 'has-error' : ''; ?>">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" value="<?= $password ?>">
                    <span class="help-block"><?= $passwordErr ?></span>
                    <span class="help-block"><?= $errorMessage ?></span>
                </div>
          <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Login">
          </div>
          <a class="loginLink" href="signup.php">Don't have an Account yet?</a>

          </div>
        </form>
      </div>
    </div>
  </body>
</html>
