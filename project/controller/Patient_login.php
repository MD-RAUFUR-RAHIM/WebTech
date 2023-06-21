 <?php
include 'validation_Patient1.php';
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/Patient_log_style.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'Home_header1.php';?>
<br><br>
<h2>PATIENT LOGIN</h2>

<br>
<br>

<img src="s1.jpg" height="350px" width="500"  >


<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
<label class="User_patient" for="fname">User name</label><br>

  <input class ="b2" type="text" id="name" name="pname" ><br>
  <span class="error"> <?php echo $pname_error;?></span>

  <br>
  <label class ="password_patient" for="fname">Password</label><br>
  <input type="password" id="passward" name="passward"><br>
   <span class="error"> <?php echo $ppassward_error;?></span>
  <br>
  
<br>
  <input  type="submit" value="Login">
  <br>
  
       
   
   <br>
  <a href="Patient_registration.php">
  <input type="button"  value="create account">
  </a>

</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
