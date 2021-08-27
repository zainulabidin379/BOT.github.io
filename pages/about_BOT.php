<?php 
//database connection config
$hostname="localhost";
$db_user="root";
$db_password="";
$db_name="counter";

// $hostname="localhost";
// $db_user="id13973906_root";
// $db_password="ByFj1Gv|^}Wu{Nmc";
// $db_name="id13973906_counter";

//connecting to database
$connection=mysqli_connect($hostname, $db_user, $db_password, $db_name);
if (mysqli_connect_errno()) {
    die("Error connecting to the database");
}

//adding new visitor
$visitor_ip=$_SERVER['REMOTE_ADDR'];
$current_time=time();


//checking if visitor is unique
$query="SELECT * FROM counter_table WHERE ip_address='$visitor_ip'";
$result=mysqli_query($connection, $query);

//checking query error
if (!$result) {
    die("Retriving Query Error<br>".$query);
}

$total_visitors=mysqli_num_rows($result);
if ($total_visitors<1) {
    $query="INSERT INTO counter_table(ip_address) VALUES('$visitor_ip')";
    $result=mysqli_query($connection, $query);
}



//retriving existing visitors
$query="SELECT * FROM counter_table;";
$result=mysqli_query($connection, $query);

//checking query error
if (!$result) {
    die("Retriving Query Error<br>".$query);
}

$total_visitors=mysqli_num_rows($result);


 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About BOT - Be On Time</title>
    <link rel="stylesheet" href="../css/about_BOT.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
  </head>
  <body>
<!---------------------------------------Navigation Bar--------------------------------------------------->
<section id="header">
    <div class="nav">
      
      <div class="nav-header">
        <a class="nav-logo" href="../index.php">
          <img src="../images/logo1.png">
        </a>
      </div>
      <input type="checkbox" id="nav-check">
      <div class="nav-btn">
        <label for="nav-check">
          <span></span>
          <span></span>
          <span></span>
        </label>
      </div>
      
      <div class="nav-links ml-auto" id="nav-links">
        <a href="../index.php" onclick="hidemenu();" >HOME</a>
        <a href="../pages/offers.php" onclick="hidemenu();">OFFERS</a>
        <a href="#" onclick="hidemenu();" class="active">ABOUT <b>BOT</b></a>
        <a href="../pages/our_team.php" onclick="hidemenu();">OUR TEAM</a>
        <a href="../pages/contact_us.php" onclick="hidemenu();">CONTACT US</a>
      </div>
      <a onclick="hidemenu()" id="hiddenbtn"></a>
      <div id="profile">
        <a href="dashboard.php">
          <?php
          session_start();
          if(isset($_SESSION["username"])) {
              echo $_SESSION['username'];
          }
          else{
            echo "Profile";
          }
           ?>
        </a>
      </div>
    </div>
  </section>
<!---------------------------------------Landing page --------------------------------------------------->

<section id="main_sect">
  <div class="container text-center">
    <h1>About BOT</h1>
    <div class="main-div">
      <p>We are pretty much sure that soon we all will digitalize ourselves. In this making, we have to introduce a fresh gaming experience to change the concept of virtual gaming into real time. And in this way you will achieve something real in your hand. <br>
      <br>The system will include these following modules:</p>
      <ul>
        <li><span>Login Information:</span> You can login with your name (username), email, cell number and password. You can also login with your Facebook account.</li>
        <li><span>Access:</span> The system will fetch the information about location and notification access.</li>
        <li><span>Destination:</span> You will receive auto-generated time by entering your destionation.</li>
        <li><span>Arrival:</span> After successful arrival on your destions, you will receive some BOT points.</li>
        <li><span>BOT Points:</span> These points can be redeemed on different platforms provided by BOT collabed companies.</li>
        <li><span>Unsuccessful Arrival:</span> If you arrived before or after the time provided by BOT, you will receive the notification of try again.</li>
      </ul>
    </div>

      <button class="btn" onclick="appalert()">Get Our Android/IOS App</button>

      <div class="visitor_counter">
        <h3>Our Unique Visitors Till Now</h3>
        <h4><?php echo $total_visitors; ?></h4>
      </div>
  </div>
</section>

<!---------------------------------------Footer--------------------------------------------------->
<footer id="footer">
  <div class="container text-center">
    <h6><i class="far fa-copyright"></i> 2020. All Rights Reserved</h6>
  </div>
</footer>


<script type="text/javascript">
  function hidemenu(){
    var navchk = document.getElementById('nav-check');
    navchk.checked = false;
  }

  function appalert() {
  alert("Our App is under development it'll be live soon.\nThanks for visiting BOT :)");
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script><script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
</html>
