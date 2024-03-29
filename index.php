
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Be On Time</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Kalam' rel='stylesheet'>
  </head>
  <body>
<!---------------------------------------Navigation Bar--------------------------------------------------->
<section id="header">
    <div class="nav">
      
      <div class="nav-header">
        <a class="nav-logo" href="index.php">
          <img src="images/logo1.png">
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
        <a href="#" onclick="hidemenu();" class="active">HOME</a>
        <a href="pages/offers.php" onclick="hidemenu();">OFFERS</a>
        <a href="pages/about_BOT.php" onclick="hidemenu();">ABOUT <b>BOT</b></a>
        <a href="pages/our_team.php" onclick="hidemenu();">OUR TEAM</a>
        <a href="pages/contact_us.php" onclick="hidemenu();">CONTACT US</a>
      </div>
      <a onclick="hidemenu()" id="hiddenbtn"></a>
      <div id="profile">
        <a href="pages/dashboard.php">
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
    <h1>Be On Time</h1>
    <img src="images/logo2.png">
  </div>
  <!-- Ticker -->
    <div class="ticker-container">
      <div class="ticker-wrap">
        <div class="ticker">
          <div class="ticker__item">A real time gaming experience in which you will be amazed and earn at the same time.</div>
          <div class="ticker__item">We are pretty much sure that soon we all will digitalize ourselves. In this making, we have to introduce a fresh gaming experience to change the concept of virtual gaming into real time. And in this way you will achieve something real in your hand.</div>
        </div>
      </div>
    </div>

    <div class="container text-center">
    <div class="map">
        <div id="googleMap" style="width:100%;height:400px;"></div>
    </div>
    <button class="btn" onclick="appalert()">Get Our Android/IOS App</button>
  </div>
</section>

<!---------------------------------------Footer--------------------------------------------------->
<footer id="footer">
  <div class="container text-center">
    <h6><i class="far fa-copyright"></i> 2020. All Rights Reserved</h6>
  </div>
</footer>

<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(33.724474,72.819315),
  zoom:15,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxz4TFoJIqfXE_Ate_CM_cm2dHS00hvow&callback=myMap"></script>

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
