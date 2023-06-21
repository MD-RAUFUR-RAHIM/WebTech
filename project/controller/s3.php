<br>
<html>
<head>
<link rel="stylesheet" href="../css/s3_style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php 
include "header.php";
include "header4.php"
?>

</head>
<body>
<br>
<h2>BASIC LIFE SUPPORT(BLS) AMBULANCE
</h2>
<br>
<br>
<br>
<br>

<img src="s3.PNG" height="350px" width="450"  >
<form action="/action_page.php"  method="post">

<p>
<b>
Basic Life Support Ambulance is commonly known as BLS ambulance

</b>
</p>
<div id="flip3">Click For Detatils</div>
<div id="panel3">
It provides basic life supportto the patient or senior aboard.A typical basic life
support ambulance will be well equipped with the latest medical equipment
such as an automatic external defibrillator, blood pressure monitoringequipment, 
Pulse Oximetry and Oxygen delivery services combined with competent nurses
to assist patients who are not physically and emotionally stable. Ambulance on 
Cal lmedicalresponse strives to provide an extreme level of care to the patients
duringthe transportation.
Basic life support ambulances are typically emergency ambulances and aid the 
necessary medical support during the transit till the patient is transported to the
hospital.

</div>
</form>


<script> 
$(document).ready(function(){

  $("#flip3").click(function(){
    $("#panel3").slideToggle("slow");
  });

 

});



</script>
<style> 
#panel3, #flip3 {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel3 {
  padding: 100px;
  display: none;
}
</style>







<div class="clear"></div>
<br><br><br>
<br><br><br>
<br>
<br>

</body>
</html>
