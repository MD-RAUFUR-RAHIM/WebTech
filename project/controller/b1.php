<br>
<html>
<head>
<link rel="stylesheet" href="../css/s1_style2.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php 
include "header.php";
include "header5.php"
?>
</head>
<body>
<br>

<h2>NEONATAL AMBULANCE

</h2>
<br>
<br>
<br>
<img src="s2.jpg" height="350px" width="450"  >
<form action="/action_page.php"  method="post">

<p>
<b>
#Neonatal Ambulance was launched with an attempt to reduce neonatal mortality 
  rate in the country.
</p>
<div id="flip">Click For Detatils</div>
<div id="panel">
  
  #This ambulance has state-of-the-art facilities those are scientifically designed as it 
  should be baby-friendly and manned by well-trained medical personnel.
  #It has collapsible bed, attendance sheet, special plastic medical storage cabinet, 
  and central oxygen line system.
  #Neonatal Ambulances are equipped with Ventilator - Incubator Unit, Laryngoscope,
  Spectrophotometer, Pulse Oxy meter and Infusion Pump.
</div>
</form>

<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#panel").slideToggle("slow");
  });
});
</script>
<style> 
#panel, #flip {
  padding: 5px;
  text-align: center;
  background-color: #e5eecc;
  border: solid 1px #c3c3c3;
}

#panel {
  padding: 100px;
  display: none;
}
</style>

<div class="clear"></div>
<br>
<br>
<br>
<br><br>
<br>
<br>


</body>
</html>
