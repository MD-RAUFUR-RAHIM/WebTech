<html>
<head>
<link rel="stylesheet" href="../css/s2_style1.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<?php 
include "header.php";
include "header4.php"
?>
</head>
<body>
<br>

<h2>ADVANCED LIFE SUPPORT AMBULANCE

</h2>
<br>
<br>
<br>
<br>


<img src="s4.PNG" height="350px" width="450"  >
<form action="/action_page.php"  method="post">

<p>
<b>
# ACLS is fully equipped to handle patients needing life support.</b>
</p>
 <div id="flip">Click For Detatils</div>
<div id="panel">
# ACLS Ambulanceis well equipped with tools and equipment similar to a hospital emergency department or   critical care unit.
# The highly spacious interiors of the ambulance, houses mount for syringe pumps and
 installing central gas management system.
 The highly spacious interiors of the ambulance, houses mount for syringe pumps and
 installing central gas management system.
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
<br><br><br>
<br><br><br>
<br>
<br>
</body>
</html>
