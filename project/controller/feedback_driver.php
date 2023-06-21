
<html>
<head>
<link rel="stylesheet" href="../css/feedback_driver_style1.css">
<script src="../js/feedback.js"> </script>
<?php include 'header.php';?> 
<?php include 'header3.php';?> 


</head>
<body>

<h2>FEEDBACK</h2>

<img src="f.PNG" height="400px" width="500"  >
<form name="myForm" action="Driver_access.php" onsubmit="return validateForm()" method="post">

<br><br><br>
<label class="registration_driver" for="fname">Driver Name:</label>
  <input class ="b2" type="text" id="dname" name="dname" ><br>
  <span id="dname1" class="error"> </span>
  
  <br>
  

  <label class="registration_driver" for="fname"> Email:</label>
  <input type="text" id="email" name="email"><br>
   <span id="email1" class="error"> </span>
   
  
  
<br>

  <label class="registration_driver" for="fname"> Feedback:</label>
  <textarea name="comment" rows="5" cols="30" id="feedback"></textarea><br>
   <span id="feedback1" class="error"> </span>
  
  

<br>
<br>
<br>
 <a href="Driver_access.php">

  <input  type="submit" value="Submit">
</a>
  
 
</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
