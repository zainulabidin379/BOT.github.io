<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Offers - Be On Time</title>
    <link rel="stylesheet" href="../css/offers.css">
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
        <a href="#" onclick="hidemenu();" class="active">OFFERS</a>
        <a href="../pages/about_BOT.php" onclick="hidemenu();">ABOUT <b>BOT</b></a>
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
    <h1>Offers</h1>
    <p>Offers will be available Soon...</p>
    <button class="btn" onclick="appalert()">Get Our Android/IOS App</button>
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
