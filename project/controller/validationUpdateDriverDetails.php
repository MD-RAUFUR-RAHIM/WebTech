<?php
$name=$passward=$dname=$email=$address='';
$dname_error=$passward_error=$name_error=$email_error=$address_error='';
$flag=true;
$id=$_COOKIE['name'];
if($_SERVER['REQUEST_METHOD']=="POST")
{
	if(empty($_POST['ddname']))
	{
		$dname_error="The Driver name field is required.";
		$flag=false;
	}
	else
	{

	$dname=valid($_POST['ddname']);

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

	if(empty($_POST['ddpassward']))
	{
		$passward_error="The passward field is required.";
		$flag=false;
		
	}
	
	else
		{
			$passward=valid($_POST['ddpassward']);
		}

	
}	

if($flag && $dname!="" && $address!="" && $email!="" && $name!="" && $passward!=""  ){
include'conn.php';

$sql="UPDATE driver1 SET dname='$dname', address = '$address', demail = '$email', dusername='$name' , dPass='$passward' WHERE dusername= '$id'";

if($conn->query($sql)===TRUE)
	{

		 echo "<script> alert('Updated successfully ')</script>";
		 //sleep(5);
		 header("Location:Driver_access.php");
		

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