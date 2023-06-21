<?php
$pname=$email=$ambulance_type=$location=$city='';
$pname_error=$email_error=$ambulance_type_error=$location_error=$city_error='';
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
	if(empty($_POST['ambulance_type']))
	{
		$ambulance_type_error="The address field is requird.";
		$flag=false;
		
	}
	else{$ambulance_type=valid($_POST['ambulance_type']);
	
	}
	if(empty($_POST['location'])){
		$location_error="The location field is requird.";
		$flag=false;
		
	}
	else
	{
		$location=valid($_POST['location']);
	}

	if(empty($_POST['city']))
	{
		$city_error="The city field is requird.";
		$flag=false;
		
	}
	
	else
		{
			$city=valid($_POST['city']);
		}


}	



if($flag && $pname!=""  && $email!="" && $ambulance_type!="" && $location!="" && $city!=""  ){
include'conn.php';

$sql="INSERT INTO booking(pname,pemail,pambulance_type,plocation,pcity) VALUES
	('$pname','$email','$ambulance_type','$location','$city')";
if($conn->query($sql)===TRUE)
	{
		 echo "<script> alert('Booking successful')</script>";
	
		 
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