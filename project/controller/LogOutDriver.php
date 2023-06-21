<?php
if(isset($_COOKIE['name']) && isset($_COOKIE['passward']))
    {
    setcookie("name",$name, time()-3600, '/' );
    setcookie("passward",$passward, time()-3600, '/' );
    header("Location: Home.php");
    }
?>