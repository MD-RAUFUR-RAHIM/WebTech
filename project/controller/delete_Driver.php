<?php

include "conn.php";
$id=$_COOKIE['name'];
$sql = "DELETE FROM driver1 WHERE dusername= '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Account deleted successfully";
  header("Location: Home.php");

} else {
  echo "Error deleting record: " ;
}
?>