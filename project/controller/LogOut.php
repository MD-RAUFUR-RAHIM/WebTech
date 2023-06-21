<?php 

if(isset($_COOKIE['pname']) && isset($_COOKIE['passward']))
    {
    setcookie("pname",$pname, time()-3600, '/' );
  	setcookie("passward",$passward, time()-3600, '/' );
  	header("Location: Home.php");
    }
?>