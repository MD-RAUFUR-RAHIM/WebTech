<div class ="header1">


<html>
<head> 
<link rel="stylesheet" type="text/css" href="../css/admin_h_style2.css">
</head>
<hr>
    <body>
	<a href="type_of_ambulance.php">
		  <input class="input10" type="button" value="VIEW AMBULANCE">
		  </a>
		  <a href="Driver_details.php">
		<input class="input10" type="button" value="DRIVER DETAILS">
		</a>
	    <a href="patient_details.php">

        <input class="input10" type="button" value="PATIENT DETAILS">
		</a>
		<a href="feedback_details.php">
        <input class="input10" type="button" value="CHECK FEEDBACK">
		</a>
	
		<a href="Booking_history.php">
        <input class="input10" type="button" value="HISTORY">
		</a>

        <a href="Admin_access.php">
        <input class="input11" type="button" value="<?php if(isset($_COOKIE['aname'])){echo $_COOKIE['aname'];}?>">
		</a>
		


		<a href="Home.php">
		   <input class="input10" type="button" value="LOG OUT">
		   </a>
      
      
    </body>
	</hr>
</html>

</div>