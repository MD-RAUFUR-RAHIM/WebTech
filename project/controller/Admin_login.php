<?php
include 'validation_Admin.php';


?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/Admin_login_style.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'Home_header1.php';?>
<br><br>
<h2>ADMIN LOGIN</h2>


<br>



<br>
<img src="s1.jpg" height="350px" width="500"  >
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">


<br>

<br>


<br>
<br>
<label class="registration_patient" for="fname">User name</label><br>

  <input class ="b2" type="text" id="name" name="aname" ><br>
    <span class="error"> <?php echo $aname_error;?></span>
  <br>
  
<
  <label class="password_patient" for="fname">Password</label><br>
  <input type="password" id="passward" name="apassward"><br>
  <span class="error"> <?php echo $apassward_error;?></span>
  <br>
  
<br>

<br>

  <input  type="submit" value="Login">
  
</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
