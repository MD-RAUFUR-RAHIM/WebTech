<div class ="header1">


<html>
<head> 
<link rel="stylesheet" type="text/css" href="../css/header1_style1.css">
</head>
<hr>
    <body>
	<a href="type_of_ambulance1.php">
        <input class="input11" type="button" value="TYPE OF AMBULANCE">
		</a>
		
		  <a href="Booking.php">
        <input class="input11" type="button" value="BOOKING AMBULANCE">
		</a>
		<a href="feedback.php">
        <input class="input11" type="button" value="FEEDBACK">
		</a>
		<a href="personal_Patient.php">
        <input class="input11" type="button" 
        value="<?php if(isset($_COOKIE['pname']))
  	   {
  		echo $_COOKIE['pname'];
  			}?>">
  		</a>

		<a href="LogOut.php">
		<input class="input11" type="button" value="LOG OUT">
		</a>
      
      
    </body>
	</hr>
</html>

</div>