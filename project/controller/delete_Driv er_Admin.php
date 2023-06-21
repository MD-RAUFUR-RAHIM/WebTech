<?php

include "conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
$id = $_POST['apname'];
if($id!=""){
$sql = "DELETE FROM drver1 WHERE dusername= '$id'";
if ($conn->query($sql) === TRUE) {
  echo "Account deleted successfully";
  header("Location: Admin_access.php");
} 

}
else {
 $ad_error="Please Enter a UserName to proceed";
}
}
?>