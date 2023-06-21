<?php
include 'validation_Patient.php';
?>
<html>
<head>
<link rel="stylesheet" href="../css/patient_registration_style.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'Home_header1.php';?>
<br><br>
<h2>PATIENT REGISTRATION</h2>


<br>




<img src="a4.jpg" height="400px" width="500"  >
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"  method="post">


<label class="registration_driver" for="fname">Patient Name:</label>
  <input class ="b2" type="text" id="pname" name="pname" ><br>
  <span class="error"> <?php echo $pname_error;?> </span>
  <br>
  

  <label class="registration_driver" for="fname"> Email:</label>
  <input type="text" id="email" name="email"><br>
   <span class="error"> <?php echo $email_error;?> </span>
  
  <br>
  <label class="registration_driver" for="fname"> Address:</label>
  <input class ="b2" type="text" id="address" name="address" ><br>
   <span class="error">  <?php echo $address_error;?></span>
  <br>

  <label class="registration_driver" for="fname"> Blood Group:</label>
  <input class ="b2" type="text" id="bg" name="bg" ><br>
   <span class="error">  <?php echo $bg_error;?></span>
  <br>

<label class="registration_driver" for="fname">User name:</label>

  <input class ="b2" type="text" id="name" name="name" ><br>
   <span class="error"> <?php echo $name_error;?> </span>
  <br>
  

  <label class="registration_driver" for="fname">Password:</label>
  <input type="password" id="passward" name="passward"><br>
   <span class="error"> <?php echo $passward_error;?> </span>
  <br>
  
<br>


  <input  type="submit" value="Sign Up">

</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
