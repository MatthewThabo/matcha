<?php
if(!isset($_SESSION)){
  session_start();
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
@import url('https://fonts.googleapis.com/css?family=Merienda+One');
@import url('https://fonts.googleapis.com/css?family=Open+Sans');

</style>
<link rel="stylesheet" type="text/css" href="style/global.css">
<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="google" content="notranslate" />
<title>home - matcha</title>
</head>


<body>
  <?php
	$current_page = "home";
  include "includes/header.php";
  // include "config/setup.php";
//	echo $_SESSION['login'];
  ?>
  <div class="center">

  <p class="text">All you need is love.</p><br/>
    <img src="img/allyouneedislove.JPG" id="home" alt="lovematch"><br/>
  </div>


</body>
<?php
include 'includes/footer.php';
 ?>
</html>

