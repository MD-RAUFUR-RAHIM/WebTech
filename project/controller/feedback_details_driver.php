<?php



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/feedback_details_driver_style.css">

</head>
<body>
<?php include 'header.php';?> 

<h2>FEEDBACK</h2>


<br>

<?php
include 'conn.php';
 // select or read data start
$sql = "SELECT dname,demail,dfeedback FROM driver_feedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Driver Name</th> <th>Email</th>  <th>Feedback</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["dname"]. "</td> 
         <td>" . $row["demail"]. "</td>
	
	<td>" . $row["dfeedback"]. "</td>


        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

?>



<br>
<br><br><br><br><br>



<br>

<br>


<br>
<br>

  <br>
  
<br>

<br>
<br><br><br><br><br><br><br><br>
  <input class="show"  type="submit" value=" Booking History">
  
 <a href="Admin_access.php">
  <input class="back" type="button" value="Back!">
 
 </a>

</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
