
function validateForm() {
  var dnam="";
  var dname = document.getElementById("dname").value;
    var email = document.getElementById("email").value;

  var feedback = document.getElementById("feedback").value;


  if (dname == "") {
    document.getElementById("dname1").innerHTML="Please fill all the filled ";
    return false;
  }
  
  if(email==""){
	  document.getElementById("email1").innerHTML="Email field is required";
	  return false;
}
 if(feedback==""){
	document.getElementById("feedback1").innerHTML="Feedback field is required";
	return false;
}
if(dname!="" && email!="" && $feedback!="")
{
 <script>alert("Submitted Successfully");</script>
 header("Location:Driver_access.php");
}


}


