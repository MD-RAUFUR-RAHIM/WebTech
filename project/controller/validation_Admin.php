
<?php

$aname=$apassward='';
$aname_error=$apassward_error='';

$flag=true;
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	if(empty($_POST['aname'])){
		$aname_error="The user name field is requird.";
		$flag=false;
	}


	else{
		$aname=$_POST['aname'];
	}


	if(empty($_POST['apassward']))
	{
		$apassward_error="The passward field is requird.";
		$flag=false;
	}
	

	else
		{
			$apassward=valid($_POST['apassward']);

		}
	

}


if($flag && $aname!="" && $apassward!="")
{
include'conn.php';

 $sql="select * from admin1 where ausername='$aname' and aPass='$apassward'";



$result=$conn->query($sql);

if ($result) {
  if($result->num_rows==1)
  {
  	setcookie("aname",$aname, time()+3600, '/' );
  	setcookie("apassward",$apassward, time()+3600, '/' );
  	if(isset($_COOKIE['aname']))
  	{
  		echo $_COOKIE['aname'];
  	}
  	header("Location: Admin_access.php");
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
	
