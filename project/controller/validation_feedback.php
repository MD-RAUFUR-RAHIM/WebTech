
<?php

$pname=$email=$feedback='';
$pname_error=$email_error=$feedback_error='';

$flag=true;
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	if(empty($_POST['pname'])){
		$pname_error="The user name field is requird.";
		$flag=false;
	}


	else{
		$pname=$_POST['pname'];
	}

	if(empty($_POST['feedback'])){
		$feedback_error= "Can not submit Empty Feedback";
		$flag=false;
	}


	else{
		$feedback=$_POST['feedback'];
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



if($flag && $pname!="" && $email!="" && $feedback!="")
{


include'conn.php';
$sql="INSERT INTO pFeedback(pname,pemail,Feedback) VALUES('$pname','$email','$feedback')";
if($conn->query($sql)===TRUE)
	{
		 echo "<script> alert('Feedbacked successfully ')</script>";
		 
	}

}

else
	{ 
		echo "<script> alert('All the field needs to fullfilled to submit')</script>";
		$pname_error="The user name field is requird.";
		$email_error="The email field is requird.";
		$feedback_error= "Can not submit Empty Feedback"; 
	}

}





/*if ($result) {
  if($result->num_rows==1)
  {
  	setcookie("pname",$pname, time()+3600, '/' );
  	setcookie("passward",$passward, time()+3600, '/' );
  	if(isset($_COOKIE['pname']))
  	{
  		echo $_COOKIE['pname'];
  	}
  	header("Location: patient_access.php");
  }
}*/




	
	function valid($data)
{
	$data=trim($data);
	
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

	?>
	

