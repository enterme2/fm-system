<?php
include('php/login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/w3.css">
<link rel="stylesheet" href="css/w3-theme-blue.css">
<link rel="stylesheet" href="css/font-awesome.css">

<body>
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-theme w3-top w3-left-align w3-large">
    <a href="index.php" class="w3-bar-item w3-button w3-theme-l1">AWS</a>
    <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Home</a>
  </div>
</div>


	<div class="w3-padding-64"></div>

<div class="w3-row w3-container">

    <div class="w3-col m5 w3-center">
      <p><wbr></p>
    </div>
    <div class="w3-col m3  w3-center w3-card-4 ">
      <p>
      	<form action="" method="post">
      	<div class="w3-padding-16"></div>
      	<input class="w3-input " id="name" name="username" placeholder="Username" style="text-align:center" type="text">
      	<input class="w3-input " id="password" name="password" placeholder="Password" style="text-align:center" type="password">
      	<span><p class="w3-text-red"><?php echo $error; ?></p></span>
      	
      	<input class="w3-button w3-round w3-theme w3-hover-aqua w3-block " name="submit" type="submit" value=" Login ">
      	<div class="w3-padding-16"></div>
      </p>
    </div>

</div>





</body>
</html>
