<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration - Be On Time</title>
    <link rel="stylesheet" href="../css/login.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
</head>
<body>
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='cont'>
                  <div class='form'>
                  <h3 class='link'>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  <p  class='link'>Go to <a href='../index.php'>Homepage</a></p>
                  </div></div>";
        } else {
            echo "<div class='cont'>
                  <div class='form'>
                  <h3 class='link'>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  <p  class='link'>Go to <a href='../index.php'>Homepage</a></p>
                  </div></div>";
        }
    } else {
?>
<div class="cont">
  <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username"  maxlength = "10" required />
        <input type="email" class="login-input" name="email" placeholder="Email Adress">
        <input id="password-field" type="password" class="login-input" name="password" placeholder="Password"><i id="pass-status" class="fa fa-eye" aria-hidden="true" onClick="viewPassword()"></i>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
        <p  class="link">Go to <a href="../index.php">Homepage</a></p>
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
