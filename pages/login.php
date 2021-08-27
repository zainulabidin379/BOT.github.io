<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login - Be On Time</title>
    <link rel="stylesheet" href="../css/login.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";

        $result = mysqli_query($con, $query) or die(mysql_error());

        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: dashboard.php");
            }
            else{
                $_SESSION['username'] = $username;
                // Redirect to user dashboard page
                header("Location: dashboard.php");
            }
            
        } else {
            echo "<div class='cont'>
                  <div class='form'>
                  <h3 class='link'>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div></div>";
        }
    } else {
?>
<div class="cont">
    <form class="form" method="post" name="login">
        <h1>Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input id="password-field" type="password" class="login-input" name="password" placeholder="Password"/><i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Register Now</a></p>
        <p class="link">Go to <a href="../index.php">Homepage</a></p>
  </form>
</div>
    
<?php
    }
?>

<script type="text/javascript">
function viewPassword()
{
  var passwordInput = document.getElementById('password-field');
  var passStatus = document.getElementById('pass-status');
 
  if (passwordInput.type == 'password'){
    passwordInput.type='text';
    passStatus.className='fa fa-eye-slash';
    
  }
  else{
    passwordInput.type='password';
    passStatus.className='fa fa-eye';
  }
}
</script>

</body>
</html>
