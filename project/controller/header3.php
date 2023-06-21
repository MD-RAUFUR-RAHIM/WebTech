<div class ="header1">

<html>
<head> 
<link rel="stylesheet" type="text/css" href="../css/header3_style3.css">
</head>
<hr>
    <body>
	
	
           <a href="type_of_ambulance2.php">
		  <input class="input10" type="button" value="VIEW AMBULANCE">
		  </a>
         <a href="feedback_driver.php">
        <input class="input10" type="button" value="FEEDBACK">
		</a>
		<a href="personal_Driver.php">
        <input class="input10" type="button" value="<?php 
	
       		 if(isset($_COOKIE['name']))
  			{
  				echo $_COOKIE['name'];
  			}?>">
  		</a>
  			<a href="Driver_access.php">
		   <input class="input10" type="button" value="HOME">
		   </a>
		   <a href="LogOutDriver.php">
		   <input class="input10" type="button" value="LOG OUT">
		   </a>
      
      
    </body>
	</hr>
</html>

</div>