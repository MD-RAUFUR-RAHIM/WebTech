<div class ="header1">


<html>
<head> 
<link rel="stylesheet" type="text/css" href="../css/header1_style.css">
</head>
<hr>
    <body>
	<a href="type_of_ambulance.php">
        <input class="input11" type="button" value="Home">
		</a>
		  

        <input class="input11" type="button" 
        value="<?php
        if(isset($_COOKIE['pname']))
  		{
  		echo $_COOKIE['pname'];
  		}?>
   		 ">
		<a href="LogOut.php">
		   <input class="input11" type="button" value="LOG OUT">
		   </a>
      
      
    </body>
	</hr>
</html>

</div>