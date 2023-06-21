
<?php

$pname=$passward=$pemail='';
$pname_error=$ppassward_error=$pemail_error='';

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


	if(empty($_POST['passward']))
	{
		$ppassward_error="The passward field is requird.";
		$flag=false;
	}
	

	else
		{
			$passward=valid($_POST['passward']);

		}
	

}


if($flag && $pname!="" && $passward!="")
{
include'conn.php';

$sql="select * from patient1 where pusername='$pname' and pPass='$passward'";

$result=$conn->query($sql);

if ($result) {
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
  else
  {
  	echo "<script> alert('Your name or password is Incorrect')</script>";
  	
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
	
