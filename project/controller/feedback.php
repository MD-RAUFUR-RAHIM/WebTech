
<html>
<head>
<link rel="stylesheet" href="../css/feedback_style3.css">

<?php include"validation_feedback.php";?>


</head>
<body>
<?php include 'header.php';?> 
<?php include 'headerFeedback.php'?>
<h2>FEEDBACK</h2>

<img src="f.PNG" height="400px" width="500"  >
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">

<br><br><br>
<label class="registration_driver" for="fname">Patient Name:</label>
  <input class ="b2" type="text" id="pname" name="pname" ><br>
     <span class="error"> <?php echo $pname_error;?></span>
  
  <br>
  

  <label class="registration_driver" for="fname"> Email:</label>
  <input type="text" id="email" name="email"><br>
     <span class="error"> <?php echo $email_error;?></span>
   
  
  
<br>

  <label class="registration_driver" for="fname"> Feedback:</label>
  <textarea name="feedback" rows="5" cols="30" id="feedback"></textarea><br>
     <span class="error"> <?php echo $feedback_error;?></span>

  

<br>
<br>
<br>

  <input  type="submit" value="Submit">

  

</form>

<div class="clear"></div>
<?php include 'footer.php';?>
</body>
</html>
