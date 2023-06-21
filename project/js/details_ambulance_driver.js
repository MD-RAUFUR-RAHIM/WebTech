function validateForm() {
  var sl_no = document.getElementById("sl_no").value;

  if (sl_no == "" ) {
    document.getElementById("sl_no1").innerHTML="Serial No must be filled out";
	return false;
    
  }


}