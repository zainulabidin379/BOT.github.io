<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Our Team - Be On Time</title>
    <link rel="stylesheet" href="../css/our_team.css">
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
        <a href="../index.php" onclick="hidemenu();">HOME</a>
        <a href="../pages/offers.php" onclick="hidemenu();">OFFERS</a>
        <a href="../pages/about_BOT.php" onclick="hidemenu();">ABOUT <b>BOT</b></a>
        <a href="#" onclick="hidemenu();" class="active">OUR TEAM</a>
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
  <div class="container">
    <h1>Our Team</h1>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section">
  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(../images/team1.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Cheif Executive Officer</p>
        <h3 class="card__heading">Junaid Hassan Kharal</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(../images/team2.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Cofounder</p>
        <h3 class="card__heading">Shams Ur Rehman</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(../images/team3.jpeg)"></div>
      <div class="card__content">
        <p class="card__category">Managing Director</p>
        <h3 class="card__heading">Wajiha Ajmal</h3>
      </div>
    </a>
    
  <div>
</section>
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

  function appalert(){
  alert("Our App is under development it'll be live soon.\nThanks for visiting BOT :)");
}
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script><script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
</html>
