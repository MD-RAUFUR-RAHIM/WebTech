function validateForm() {
  var pname = document.getElementById("pname").value;
    var email = document.getElementById("email").value;

  var feedback = document.getElementById("feedback").value;


  if (pname == "") {
    document.getElementById("pname1").innerHTML="Patient name  filled is required ";
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




}