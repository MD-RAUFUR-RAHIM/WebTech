<?php

include "conn.php";
$id=$_COOKIE['pname'];
$sql = "DELETE FROM patient1 WHERE pusername= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Account deleted successfully";
  //header("Location: Home.php");

} else {
  echo "Error deleting record: " ;
}
?>