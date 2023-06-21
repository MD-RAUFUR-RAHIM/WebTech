<?php



?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/feedback_details_style2.css">

</head>
<body>
<?php include 'header.php';?> 
<?php include 'header2_new.php';?> 
<br>

<h2>FEEDBACK</h2>
<br>

<?php
include 'conn.php';
 // select or read data start
$sql = "SELECT pname,pemail,Feedback FROM pfeedback";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr> <th>Patient Name</th> <th>Email</th>  <th>Feedback</th> </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr > 
        <td>" . $row["pname"]. "</td> 
         <td>" . $row["pemail"]. "</td>
  
  <td>" . $row["Feedback"]. "</td>


        </tr>";

    }
    echo "</table>";
} else {
    echo "0 results";
}

?>
  
<br>

<br>
<br><br><br><br><br><br><br><br>
  
  
 

</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
