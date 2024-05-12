<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,  initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
	<title>My KPI</title>
</head>
<body>
  <div class="header">
	</div>

  <?php
    if(isset($_SESSION["UID"])){
      include 'menu.php';
    } else {
      include 'logged_menu.php';
    }
   ?>


    <div class="col-login">
    <?php
    if(isset($_SESSION["UID"])){
        ?>
        <div class="imgcontainer">
          <!--profile picture-->
          <img src="img/photo.png" alt="Avatar" class="avatar"> 
        </div>
      <?php
        echo '<p align="center">Welcome: ' . $_SESSION["userName"] . "<p>";
      }
    else {
      ?>
        <form action="login_action.php" method="post" id="login">
          <div class="container">
            <div class="imgcontainer">
              <img src="img/img_avatar2.png" alt="Avatar" class="avatar">
            </div>
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Username" name="userName" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="userPwd" required>
            <button type="submit">Login</button>
            <label> <input type="checkbox" checked="checked" name="remember"> Remember me </label>
            <span class="psw">
              <a href="register.php" style="cursor: pointer;">Register |</a>
              <a style="cursor: pointer;">Forgot password?</a>
            </span>
          </div>
        </form>
      <?php
      }
      ?>
   
   <div class="emptyspace">

    <footer class="footer">
      <p>Copyright (c) 2023 - Dyeanne Angel Paulus - BI21110019</p>
    </footer>

<script>
//JS to show responsive menu
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>
</body>
</html>
