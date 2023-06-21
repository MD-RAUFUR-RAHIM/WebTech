<?php
$name=$passward=$dname=$email=$address=$bg='';
$dname_error=$passward_error=$name_error=$email_error=$address_error=$bg_error='';
$flag=true;
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(empty($_POST['dname']))
	{
		$dname_error="The Driver name field is required.";
		$flag=false;
	}
	else
	{

	$dname=valid($_POST['dname']);

    }
		
	if(empty($_POST['email']))
	{
		$email_error="The email field is required.";
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
		$address_error="The address field is required.";
		$flag=false;
		
	}
	else{$address=valid($_POST['address']);
	     if (!preg_match("/^[a-zA-Z-' ]*$/",$address)) {
		   $address_error ="Only letters and white space allowed";
		   $flag=false;
		
		 }
	}
	if(empty($_POST['name'])){
		$name_error="The user name field is required.";
		$flag=false;
		
	}
	else
	{
		$name=valid($_POST['name']);
	}

	if(empty($_POST['passward']))
	{
		$passward_error="The passward field is required.";
		$flag=false;
		
	}
	
	else
		{
			$passward=valid($_POST['passward']);
		}

	
}	

if($flag && $dname!="" && $address!="" && $email!="" && $name!="" && $passward!=""  ){
include'conn.php';

$sql="INSERT INTO driver1(dname,address,demail,dusername,dPass) VALUES
	('$dname','$address','$email','$name','$passward')";
if($conn->query($sql)===TRUE)
	{
		 echo "<script> alert('Registration successfully ')</script>";
		 //sleep(5);
		 header("Location:Driver_login.php");
		

	}
else
	{
		 echo "<script> alert('Registartion Unsuccessfull! Use another User name.This name already exist')</script>";
		 
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