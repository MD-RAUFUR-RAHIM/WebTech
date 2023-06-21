<?php
include"validation_booking.php";

?>
<html>
<head>
<link rel="stylesheet" href="../css/Booking_style2.css">


</head>
<body>
<?php 
include 'header.php';
include'headerFeedback.php';
?> 

<br>
<br>
  <br>
<br>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>"  method="post">


<label class="registration_driver" for="fname">Patient Name:</label>
  <input class ="b2" type="text" id="sl_no" name="pname" ><br>
  <span class="error"> <?php echo $pname_error;?> </span>
  
  <br>
  

  <label class="registration_driver" for="fname"> Email:</label>
  <input type="text" id="ambulance_no" name="email"><br>
     <span class="error"> <?php echo $email_error;?> </span>

   
  
  <br>
  <label class="registration_driver" for="fname"> Ambulance Type:</label>
  <input class ="b2" type="text" id="ambulance_type" name="ambulance_type" ><br>
     <span class="error"> <?php echo $ambulance_type_error;?> </span>

   
  <br>


<label class="registration_driver" for="fname">Location:</label>

  <input class ="b2" type="dname" id="dname" name="location" ><br>
     <span class="error"> <?php echo $location_error;?> </span>

   
  <br>
  
  <label class="registration_driver" for="fname">city:</label>
  <input type="text" id="city" name="city"><br>
     <span class="error"> <?php echo $city_error;?> </span>

   
  <br>
<br>
  <br>
<br>
  <input  type="submit" value="BooK">

  

</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
