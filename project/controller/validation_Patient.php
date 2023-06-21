<?php
$name=$passward=$pname=$email=$address=$bg='';
$name_error=$passward_error=$pname_error=$email_error=$address_error=$bg_error='';
$flag=true;
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(empty($_POST['pname']))
	{
		$pname_error="The Patient name field is requird.";
		$flag=false;
	}
	else
	{

	$pname=valid($_POST['pname']);

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

	if(empty($_POST['passward']))
	{
		$passward_error="The passward field is requird.";
		$flag=false;
		
	}
	
	else
		{
			$passward=valid($_POST['passward']);
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



if($flag && $pname!="" && $address!="" && $email!="" && $bg!="" && $name!="" && $passward!=""  ){
include'conn.php';

$sql="INSERT INTO patient1(pname,paddress,pemail,pbloodgrp,pusername,pPass) VALUES
	('$pname','$address','$email','$bg','$name','$passward')";
if($conn->query($sql)===TRUE)
	{
		 echo "<script> alert('Registration successfully ')</script>";
		 header("Location:patient_login.php");
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