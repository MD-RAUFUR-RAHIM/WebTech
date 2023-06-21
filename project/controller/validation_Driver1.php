
<?php

$name=$passward='';
$name_error=$passward_error='';

$flag=true;
if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	if(empty($_POST['name'])){
		$name_error="The user name field is requird.";
		$flag=false;
	}


	else{
		$name=$_POST['name'];
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
	

}


if($flag && $name!="" && $passward!="")
{
include'conn.php';

$sql="select * from driver1 where dusername='$name' and dPass='$passward'";

$result=$conn->query($sql);

if ($result) {
  if($result->num_rows==1)
  {
  	setcookie("name",$name, time()+3600, '/' );
  	setcookie("passward",$passward, time()+3600, '/' );
  	if(isset($_COOKIE['name']))
  	{
  		echo $_COOKIE['name'];
  	}
  	header("Location: Driver_access.php");
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
	
