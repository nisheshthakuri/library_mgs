<?php
    session_start();
    if (isset($_SESSION['su_email']) && isset($_SESSION['su_name']))
include "connection.php";
?>
<html>
<head>
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
<body>
    <div class="loginbox">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action=>
            <p>Username</p>
            <input type="text" name="" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="" placeholder="Enter Password">
            <input type="checkbox" value="lsRememberMe" id="rememberMe">
            <label for="rememberMe">Remember me</label>
            <input type="submit" name="" value="Login">
            <a href="Dashboard.php"> Login </a>
            <a href="forgotpassword.php">Lost your password?</a><br>
            <a href="registration.html">Don't have an account?</a>
        </form>
    </div>
    <?php
  if(isset($_POST['submit']))
  {
    $count=0;
    $res=mysqli_query($db,"SELECT * FROM `admin` WHERE username='$_POST[username]' && password='$_POST[password]';");

    $row= mysqli_fetch_assoc($res);

    $count=mysqli_num_rows($res);

    if($count==0)
    {
      ?>
            <script type="text/javascript">
              alert("The username and password doesn't match.");
            </script>
        <div class="alert alert-danger" style="width: 600px; margin-left: 370px; background-color: #de1313; color: white">
          <strong>The username and password doesn't match</strong>
        </div>
      <?php
    }
    else
    {
      $_SESSION['login_user'] = $_POST['username'];
      $_SESSION['pic']= $row['pic'];
      ?>
        <script type="text/javascript">
          window.location="profile.php"
        </script>
      <?php
    }
  }
?>
</body>
</head>
</html>
