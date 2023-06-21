<?php
include 'validation_Driver1.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/Driver_log_style.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'Home_header1.php';?>
<br><br>
<h2>DRIVER LOGIN</h2>


<br>



<img src="s1.jpg" height="350px" width="500"  >
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">




<br>
<label class="user_driver" for="fname">User name</label><br>

  <input class ="b2" type="text" id="name" name="name" ><br>
  <span class="error"> <?php echo $name_error;?></span>
  <br>
  

  <label class ="password_driver" for="fname">Password</label><br>
  <input type="password" id="passward" name="passward"><br>
   <span class="error"> <?php echo $passward_error;?></span>
  <br>
  
<br>
  <input  type="submit" value="Login">
  <br>
    
   <br>
  <a href="Driver_registration.php">
  <input type="button"  value="create account">
  </a>

</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
