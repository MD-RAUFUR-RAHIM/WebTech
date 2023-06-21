<?php
$ppname=$email=$address=$bg=$name=$ppassward='';
$id=$_COOKIE['pname'];

$name_error=$passward_error=$pname_error=$email_error=$address_error=$bg_error='';
$flag=true;
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(empty($_POST['ppname']))
	{
		echo "<script> alert('Error ')</script>";
		$pname_error="The Patient name field is requird.";
		$flag=false;
	}
	else
	{

	$ppname=valid($_POST['ppname']);

    }
		
	if(empty($_POST['email']))
	{
		$email_error="The email field is requird.";
		$flag=false;
	}
	else
	{
		$email=valid($_POST['email']);
	       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		   $email_error= "Invalid email format";
		   $flag=false;
		}
    }
	if(empty($_POST['address']))
	{
		$address_error="The address field is requird.";
		$flag=false;
		
	}
	else{$address=valid($_POST['address']);
	     if (!preg_match("/^[a-zA-Z-' ]*$/",$address)) {
		   $address_error ="Only letters and white space allowed";
		   $flag=false;
		
		 }
	}
	if(empty($_POST['name'])){
		$name_error="The user name field is requird.";
		$flag=false;
		
	}
	else
	{
		$name=valid($_POST['name']);
	}

	if(empty($_POST['ppassward']))
	{
		$passward_error="The passward field is requird.";
		$flag=false;
		
	}
	
	else
		{
			$ppassward=valid($_POST['ppassward']);
		}

	if(empty($_POST['bg']))
	{
		$bg_error="The Blood Group field is requird.";
		$flag=false;
		
	}
	else
		{

			$bg=valid($_POST['bg']);

		}
	
}

if($flag && $ppname!="" && $address!="" && $email!="" && $bg!="" && $name!="" && $ppassward!=""  )
{
include'conn.php';

$sql="UPDATE patient1 SET pname='$ppname', paddress = '$address', pemail = '$email', pbloodgrp= '$bg' , pusername='$name' , pPass='$ppassward' WHERE pusername= '$id'";
if($conn->query($sql)===TRUE)
	{

	setcookie("ppname",$ppname, time()+3600, '/' );
  	setcookie("ppassward",$ppassward, time()+3600, '/' );
  	if(isset($_COOKIE['ppname']))
  	{
  		header("Location:patient_access.php");
  	}
		 
	}

}



function valid($data)
{
	$data=trim($data);
	
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

?>
