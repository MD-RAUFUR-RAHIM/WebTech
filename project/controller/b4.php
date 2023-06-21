<br>
<html>
<head>
<link rel="stylesheet" href="../css/s4_style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php 
include "header.php";
include "header5.php"
?>

</head>
<body>
<br>

<h2>CARDIAC AMBULANCE
</h2>
<br>
<br>
<br>
<img src="s2.jpg" height="350px" width="450"  >
<form action="/action_page.php"  method="post">
<p>
<b>

 Cardiac Ambulances are designed specifically to provide assistance to patients suffering from cardiac diseases</b></p>

<div id="flip3">Click For Detatils</div>
<div id="panel3">

 Cardiac diseases one of the deadliest killers known to man today. These diseases affect the patient’s
 circulatory system, blood vessels, heart muscle, valves, or rhythm. Often,
 the blood vessels of such patients become narrow or blocked, leading 
to chest pain, heart attacks, or strokes, eventually resulting in death. In
 fact, cardiac diseases are today the leading cause of deaths in India,
 owing to factors like lack of access to quality healthcare, and the timely 
availability of appropriate cardiac ambulance services.
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
<br>
<br>
<br>
<br><br>
<br>
<br>
 
</body>
</html>
