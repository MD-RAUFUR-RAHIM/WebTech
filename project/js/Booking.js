function validateForm() {
 var sl_no = document.getElementById("sl_no").value; 
 var ambulance_type = document.getElementById("ambulance_type").value;
 var dname = document.getElementById("dname").value;
 var age = document.getElementById("age").value;
 var city = document.getElementById("city").value;
   var ambulance_no = document.getElementById("ambulance_no").value;


if(sl_no=="" || ambulance_no=="" || ambulance_type=="" || age=="" || city=="" || dname=="")
	{
    alert("please fill all the required filled");
    return false;
  }
}