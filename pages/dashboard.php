<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Be On Time</title>
    <link rel="stylesheet" href="../css/login.css" />
</head>
<body>
    <div class="cont">
        <div class="form">
        <p class="link link-dashboard">Hey, <span id="username">    <?php echo $_SESSION['username']; ?></span></p>
        <p class="link">Have a great time at BOT.</p>
        <form action="../index.php">
            <input type="submit" value="Go to Homepage"  class="login-button"/>
        </form>
        <form action="logout.php">
            <input type="submit" value="Logout"  class="login-button"/>
        </form>

    </div>
    </div>
</body>
</html>
