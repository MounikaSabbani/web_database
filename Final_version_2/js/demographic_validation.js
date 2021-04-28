function validateForm() {

  var v_username = document.forms["demoForm"]["UserName"].value;
  var v_firstname = document.forms["demoForm"]["FirstName"].value;
  var v_lastname = document.forms["demoForm"]["LastName"].value;
  var v_middlename = document.forms["demoForm"]["MiddleName"].value;
  var v_phone = document.forms["demoForm"]["Phone"].value;
  var v_email = document.forms["demoForm"]["Email"].value;
  var v_address = document.forms["demoForm"]["Address"].value;


  if (v_firstname=="" && v_lastname=="" && v_middlename=="" && v_phone=="" && v_email=="" && v_address==""){ 
      alert("You have not entered any information, please enter your details!");
      return false;
    } 

  var contact_num = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;
  if(v_phone.match(contact_num)) {
    return true;
  }
  else {
    alert("You have entered an invalid contact number!");
    return false;
  }



  if(v_email!=""){
 		if(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+\.[a-zA-Z]*$/.test(demoForm.Email.value))
 		{
    		return (true)
  		}
    	else{
    	alert("You have entered an invalid email address!");
    	return (false)
      }
	}
} 


