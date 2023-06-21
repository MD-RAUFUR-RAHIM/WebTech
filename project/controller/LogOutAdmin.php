<?php
if(isset($_COOKIE['aname']) && isset($_COOKIE['apassward']))
    {
    setcookie("aname",$aname, time()-3600, '/' );
    setcookie("apassward",$apassward, time()-3600, '/' );
    header("Location: Home.php");
    }
?>