<!DOCTYPE html>
<html>
<head>
  <!-- Site made with Mobirise Website Builder v4.3.4, https://mobirise.com -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.3.4, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/cd-158501-960-7201-712x720.png" type="image/x-icon">
  <meta name="description" content="Web Builder Description">
  <title>PHPfile</title>
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/shopping-cart/minicart-theme.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  
  
</head>

<script src="https://www.gstatic.com/firebasejs/4.2.0/firebase.js"></script>
<script>
  // Initialize Firebase
  // TODO: Replace with your project's customized code snippet
  var config = {
    apiKey: "<API_KEY>",
    authDomain: "<PROJECT_ID>.firebaseapp.com",
    databaseURL: "https://<DATABASE_NAME>.firebaseio.com",
    storageBucket: "<BUCKET>.appspot.com",
    messagingSenderId: "<SENDER_ID>",
  };
  firebase.initializeApp(config);
</script>
  <body>
<script>var shopcartSettings = {"shopcart_top_offset":120,"side_offset":20,"site_width":1150,"shopcart_icon_color":"#FFFFFF","shopcart_back_color":"#27aae0","shopcart_icon_size":25,"sc_count_color":"#FFFFFF","sc_count_back_color":"#F97352","sc_count_size":12,"checkout_button":"Check Out with"};</script>

<!-- Google Analytics -->
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-106753011-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments)};
  gtag('js', new Date());

  gtag('config', 'UA-106753011-1');
</script>

<!-- /Google Analytics -->


<div id="custom-html-2k" custom-code="true" data-rv-view="70"><?php
$servername = "localhost";
$username = "cdsale1q_distero";
$password = "oretsid0";
$dbname = "cdsale1q_catraxx";

// echo "hy" . " - " . $servername . " - " . $username . " - " . $password . " - " . $dbname;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// echo "<br>" . "connection ok" . "<br>";

$sql = "SELECT Name FROM ArtistPerson";
$result = mysqli_query($conn, $sql);
    
// echo mysqli_num_rows($result) . "rows";
echo '<ul style="list-style: none; color: red;">' . PHP_EOL; 
echo "<table>";

while($row = mysqli_fetch_assoc($result)) {
echo "<tr><td>" . " ---    " . "</td><td>" . $row[Name] . "</td></tr>";
}

echo "</table>";

$conn->close();
?></div>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/shopping-cart/minicart.js"></script>
  <script src="assets/shopping-cart/jquery.easing.min.js"></script>
  <script src="assets/shopping-cart/minicart-customizer.js"></script>
  <script src="assets/firebase-blocks-plugin/firebase-plugin.js"></script>
  <script src="https://cdn.ckeditor.com/4.7.2/standard/ckeditor.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-core.js"></script>
  <script src="assets/cookies-alert-plugin/cookies-alert-script.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i class="mbri-down mbr-iconfont"></i></a></div>
    <input name="animation" type="hidden">
  <input name="cookieData" type="hidden" data-cookie-text="We use cookies to give you the best experience. Read our <a href='privacy.html'>cookie policy</a>.">
  </body>
</html>