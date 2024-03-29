<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Be On Time</title>
    <link rel="stylesheet" href="../css/contact_us.css">
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
        <a href="../pages/our_team.php" onclick="hidemenu();">OUR TEAM</a>
        <a href="#" onclick="hidemenu();" class="active">CONTACT US</a>
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
<!--------------------------------------- Landing page --------------------------------------------------->

<section id="main_sect">
  <div class="container text-center">
    <h1>Contact Us</h1>
    <div class="row">
      <div class="col-md-6">
        <form class="contact-form" method="post" action="mail_handler.php" target="_blank">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Your Name" required>
          </div>

          <div class="form-group">
            <input type="tel" name="phone" class="form-control" placeholder="Phone Number">
          </div>

          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="Email Address" required=>
          </div>

          <div class="form-group">
            <textarea class="form-control" name="message" row="4" placeholder="Your Message"></textarea>
          </div>
          <button type="submit" name="submit" target="_blank" class="btn-sbmt" >Send Message</button>
        </form>

          <div class="form_element text-center">
            <a href="https://www.facebook.com/JD-Kharal-134214960608091/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/jd_kharal/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://api.whatsapp.com/send?phone=+923337950844" target="_blank"><i class="fab fa-whatsapp"></i></a>
          </div>
      </div>
        
      <div class="col-md-6 map">
          <div id="googleMap" style="width:100%;height:370px;"></div>
      </div>

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
<script type="text/javascript">
  function hidemenu(){
    var navchk = document.getElementById('nav-check');
    navchk.checked = false;
  }

  function appalert() {
  alert("Our App is under development it'll be live soon.\nThanks for visiting BOT :)");
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxz4TFoJIqfXE_Ate_CM_cm2dHS00hvow&callback=myMap"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </body>
</html>
